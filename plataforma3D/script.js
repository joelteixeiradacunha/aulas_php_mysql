import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

// === CONFIGURAÇÃO DO AMBIENTE (CÉU DO ATLÂNTICO) ===
const container = document.getElementById('canvas-container');
const scene = new THREE.Scene();

// Cor de fundo simulando atmosfera marinha profunda
scene.background = new THREE.Color(0x0d1b2a);
scene.fog = new THREE.FogExp2(0x0d1b2a, 0.0035);

const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.5, 1000);
camera.position.set(95, 45, 115);

const renderer = new THREE.WebGLRenderer({ antialias: true, powerPreference: "high-performance" });
renderer.setSize(container.clientWidth, container.clientHeight);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 1.2;
container.appendChild(renderer.domElement);

const controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.dampingFactor = 0.05;
controls.maxPolarAngle = Math.PI / 2 - 0.02; // Impede que a câmera afunde para baixo do mar
controls.minDistance = 25;
controls.maxDistance = 220;
controls.target.set(0, 12, 0);

// === SISTEMA DE ILUMINAÇÃO (SOL E REFLEXO ESPELHADO) ===
const ambientLight = new THREE.AmbientLight(0x1b263b, 0.85);
scene.add(ambientLight);

// Luz do sol posicionada estrategicamente para gerar brilho intenso (Sun Glint) nas arestas das ondas
const sunLight = new THREE.DirectionalLight(0xffe5b4, 2.5);
sunLight.position.set(-100, 50, -80);
sunLight.castShadow = true;
sunLight.shadow.mapSize.width = 2048;
sunLight.shadow.mapSize.height = 2048;
sunLight.shadow.camera.near = 10;
sunLight.shadow.camera.far = 400;
const d = 90;
sunLight.shadow.camera.left = -d;
sunLight.shadow.camera.right = d;
sunLight.shadow.camera.top = d;
sunLight.shadow.camera.bottom = -d;
sunLight.shadow.bias = -0.0003;
scene.add(sunLight);

const hemiLight = new THREE.HemisphereLight(0x415a77, 0x0e1111, 0.7);
scene.add(hemiLight);

// === CONSTRUÇÃO DO OCEANO TRANSLÚCIDO E DINÂMICO ===
const waterGeo = new THREE.PlaneGeometry(900, 900, 160, 160);
waterGeo.rotateX(-Math.PI / 2);

const waterMat = new THREE.MeshStandardMaterial({
    color: 0x003554,        // Azul oceânico profundo e realista
    roughness: 0.05,       // Superfície polida para criar reflexos nítidos do Sol e da plataforma
    metalness: 0.88,
    flatShading: true,     // Estilo facetado essencial para destacar as cristas das ondas
    transparent: true,     // Transparência ativada para enxergar pontões e risers submersos
    opacity: 0.82,         // Densidade da água tropical marítima
    side: THREE.DoubleSide
});

const water = new THREE.Mesh(waterGeo, waterMat);
water.receiveShadow = true;
scene.add(water);

// Geração de dados complexos de ondas combinando frequências
const posAttr = waterGeo.attributes.position;
const waveData = [];
for (let i = 0; i < posAttr.count; i++) {
    waveData.push({
        x: posAttr.getX(i),
        z: posAttr.getZ(i),
        phase: Math.random() * Math.PI * 2,
        speed: 0.01 + Math.random() * 0.012,
        amp: 0.6 + Math.random() * 0.8
    });
}

// === MATERIAIS DA PLATAFORMA SEMISSUBMERSÍVEL ===
const matYellowSub = new THREE.MeshStandardMaterial({ color: 0xecb316, roughness: 0.3, metalness: 0.4 }); // Amarelo Offshore (Petrobras)
const matSteel = new THREE.MeshStandardMaterial({ color: 0x64748b, roughness: 0.2, metalness: 0.7 });
const matDarkSteel = new THREE.MeshStandardMaterial({ color: 0x334155, roughness: 0.4, metalness: 0.6 });
const matOrangeSafety = new THREE.MeshStandardMaterial({ color: 0xea580c, roughness: 0.4, metalness: 0.2 });
const matWhiteModule = new THREE.MeshStandardMaterial({ color: 0xf1f5f9, roughness: 0.4, metalness: 0.2 });
const matSignalRed = new THREE.MeshStandardMaterial({ color: 0xdc2626, roughness: 0.4, metalness: 0.3 });
const matHelipad = new THREE.MeshStandardMaterial({ color: 0x064e3b, roughness: 0.5, metalness: 0.1 });

const platformGroup = new THREE.Group();
const interactables = [];

function registerInteractable(mesh, title, description) {
    mesh.userData = { title, description };
    mesh.castShadow = true;
    mesh.receiveShadow = true;
    interactables.push(mesh);
}

// GERADOR PROCEDURAL DE TRELIÇAS (Sonda Derrick / Guindastes)
function buildLatticeStructure(baseW, topW, height, stages, material) {
    const group = new THREE.Group();
    const stageH = height / stages;
    const corners = [[-1,-1], [1,-1], [1,1], [-1,1]];

    for (let s = 0; s < stages; s++) {
        const cBottom = baseW - ((baseW - topW) * (s / stages));
        const cTop = baseW - ((baseW - topW) * ((s + 1) / stages));
        const bY = s * stageH;
        const tY = (s + 1) * stageH;

        corners.forEach(c => {
            const pB = new THREE.Vector3(c[0] * cBottom/2, bY, c[1] * cBottom/2);
            const pT = new THREE.Vector3(c[0] * cTop/2, tY, c[1] * cTop/2);
            const dir = new THREE.Vector3().subVectors(pT, pB);
            const leg = new THREE.Mesh(new THREE.CylinderGeometry(0.14, 0.2, dir.length(), 4), material);
            leg.position.copy(pB).add(dir.multiplyScalar(0.5));
            leg.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), dir.normalize());
            group.add(leg);
        });

        for (let i = 0; i < 4; i++) {
            const c1 = corners[i];
            const c2 = corners[(i + 1) % 4];
            const hBar = new THREE.Mesh(new THREE.CylinderGeometry(0.08, 0.08, cBottom, 4), material);
            hBar.rotateZ(Math.PI/2);
            if (i % 2 === 0) hBar.rotateX(Math.PI/2);
            hBar.position.set((c1[0]+c2[0])*cBottom/4, bY, (c1[1]+c2[1])*cBottom/4);
            group.add(hBar);

            const p1 = new THREE.Vector3(c1[0]*cBottom/2, bY, c1[1]*cBottom/2);
            const p2 = new THREE.Vector3(c2[0]*cTop/2, tY, c2[1]*cTop/2);
            const dirX = new THREE.Vector3().subVectors(p2, p1);
            const diag = new THREE.Mesh(new THREE.CylinderGeometry(0.06, 0.06, dirX.length(), 4), material);
            diag.position.copy(p1).add(dirX.multiplyScalar(0.5));
            diag.quaternion.setFromUnitVectors(new THREE.Vector3(0,1,0), dirX.normalize());
            group.add(diag);
        }
    }
    return group;
}

// FUNÇÃO PARA CRIAR TUBOS DE CONTRAVENTAMENTO REALISTAS (Cross-Bracing)
function createStructuralBrace(p1, p2, radius = 0.9) {
    const dir = new THREE.Vector3().subVectors(p2, p1);
    const len = dir.length();
    const geo = new THREE.CylinderGeometry(radius, radius, len, 12);
    const brace = new THREE.Mesh(geo, matSteel);
    brace.position.copy(p1).add(dir.multiplyScalar(0.5));
    brace.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), dir.normalize());
    brace.castShadow = true;
    brace.receiveShadow = true;
    platformGroup.add(brace);
}

// === MONTAGEM DA PLATAFORMA REALISTA ===

// 1. Pontões Inferiores Submersos (Dão estabilidade flutuante cortando a água profunda)
const pontoonLeft = new THREE.Mesh(new THREE.BoxGeometry(12, 6, 66), matDarkSteel);
pontoonLeft.position.set(-22, -4, 0);
platformGroup.add(pontoonLeft);

const pontoonRight = new THREE.Mesh(new THREE.BoxGeometry(12, 6, 66), matDarkSteel);
pontoonRight.position.set(22, -4, 0);
platformGroup.add(pontoonRight);

// 2. Grandes Colunas Estabilizadoras (Amarelas)
const pillarPositions = [[-22, -22], [22, -22], [22, 22], [-22, 22]];
const columnNodes = []; // Armazenará os pontos para ancorar as treliças depois

pillarPositions.forEach(pos => {
    // A coluna nasce bem abaixo do nível d'água (ancorada no pontão) e sobe até os conveses superiores
    const column = new THREE.Mesh(new THREE.CylinderGeometry(4.5, 4.5, 34, 18), matYellowSub);
    column.position.set(pos[0], 14, pos[1]);
    column.castShadow = true;
    column.receiveShadow = true;
    platformGroup.add(column);

    const belt = new THREE.Mesh(new THREE.TorusGeometry(4.7, 0.4, 8, 24), matDarkSteel);
    belt.position.set(pos[0], 4, pos[1]);
    belt.rotateX(Math.PI/2);
    platformGroup.add(belt);

    // Mapeia nós estruturais chaves (Inferiores na linha d'água e Superiores perto do deck)
    columnNodes.push(new THREE.Vector3(pos[0], 4, pos[1]));
    columnNodes.push(new THREE.Vector3(pos[0], 27, pos[1]));
});

// 3. Remodelação Fiel: Sistema de Contraventamento Tubular (Cross-Bracing)
// Unindo as bases e o topo das colunas para travar a engenharia contra o esforço das ondas marulhantes
createStructuralBrace(columnNodes[0], columnNodes[2]); // Horizontal inferior frontal
createStructuralBrace(columnNodes[2], columnNodes[4]); // Horizontal inferior direito
createStructuralBrace(columnNodes[4], columnNodes[6]); // Horizontal inferior traseiro
createStructuralBrace(columnNodes[6], columnNodes[0]); // Horizontal inferior esquerdo

createStructuralBrace(columnNodes[1], columnNodes[3]); // Horizontal superior frontal
createStructuralBrace(columnNodes[3], columnNodes[5]); // Horizontal superior direito
createStructuralBrace(columnNodes[5], columnNodes[7]); // Horizontal superior traseiro
createStructuralBrace(columnNodes[7], columnNodes[1]); // Horizontal superior esquerdo

// Vigas Diagonais Cruzadas em "X" nas 4 faces da plataforma
createStructuralBrace(columnNodes[0], columnNodes[3], 0.65); createStructuralBrace(columnNodes[1], columnNodes[2], 0.65);
createStructuralBrace(columnNodes[2], columnNodes[5], 0.65); createStructuralBrace(columnNodes[3], columnNodes[4], 0.65);
createStructuralBrace(columnNodes[4], columnNodes[7], 0.65); createStructuralBrace(columnNodes[5], columnNodes[6], 0.65);
createStructuralBrace(columnNodes[6], columnNodes[1], 0.65); createStructuralBrace(columnNodes[7], columnNodes[0], 0.65);


// 4. Linhas de Ancoragem (Catenárias descendo ao solo marinho)
const anchorDirections = [[-190, -90, -190], [190, -90, -190], [190, -90, 190], [-190, -90, 190]];
pillarPositions.forEach((pos, idx) => {
    const start = new THREE.Vector3(pos[0], 1, pos[1]);
    const end = new THREE.Vector3(anchorDirections[idx][0], anchorDirections[idx][1], anchorDirections[idx][2]);
    const dir = new THREE.Vector3().subVectors(end, start);
    const len = dir.length();
    const cableGeo = new THREE.CylinderGeometry(0.18, 0.18, len, 6);
    const cable = new THREE.Mesh(cableGeo, matDarkSteel);
    cable.position.copy(start).add(dir.multiplyScalar(0.5));
    cable.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), dir.normalize());
    platformGroup.add(cable);
});

// 5. Conveses (Decks Operacionais)
const lowerDeck = new THREE.Mesh(new THREE.BoxGeometry(56, 2, 56), matDarkSteel);
lowerDeck.position.set(0, 29, 0);
platformGroup.add(lowerDeck);

const upperDeck = new THREE.Mesh(new THREE.BoxGeometry(52, 2, 52), matSteel);
upperDeck.position.set(0, 37, 0);
platformGroup.add(upperDeck);

// 6. Risers Submarinos Centrais (Tubos de Perfuração verticais que perfuram o espelho d'água)
const riserGeo = new THREE.CylinderGeometry(0.35, 0.35, 110, 8);
for (let i = -1; i <= 1; i++) {
    for (let j = -1; j <= 1; j++) {
        if (i === 0 && j === 0) continue;
        const riser = new THREE.Mesh(riserGeo, matSteel);
        riser.position.set(-6 + (i * 2.2), -15, -6 + (j * 2.2));
        platformGroup.add(riser);
    }
}

// 7. Sonda e Equipamentos de Superfície
const derrick = buildLatticeStructure(13, 5, 45, 6, matDarkSteel);
derrick.position.set(-6, 38, -6);
platformGroup.add(derrick);

const drillPipeContainer = new THREE.Mesh(new THREE.CylinderGeometry(1.6, 1.6, 15, 12), matOrangeSafety);
drillPipeContainer.position.set(-6, 50, -6);
registerInteractable(drillPipeContainer, "Sonda de Perfuração Central", "Módulo central de perfuração operando em top drive, capaz de guiar a coluna de brocas através de lâminas d'água superiores a 2.000 metros até atingir as camadas de Pré-Sal.");

// Prédio Habitacional (Living Quarters)
const livingQuarter = new THREE.Group();
const block1 = new THREE.Mesh(new THREE.BoxGeometry(14, 12, 22), matWhiteModule);
block1.position.set(-16, 44, 12);
livingQuarter.add(block1);
for(let y = 40; y <= 48; y += 3) {
    for(let z = 4; z <= 20; z += 4) {
        const windowMesh = new THREE.Mesh(new THREE.BoxGeometry(0.2, 1, 1.5), matDarkSteel);
        windowMesh.position.set(-23.1, y, z);
        livingQuarter.add(windowMesh);
    }
}
platformGroup.add(livingQuarter);
registerInteractable(block1, "Módulo de Acomodações e Controle", "Bloco habitacional blindado e pressurizado. Aloja até 150 tripulantes e abriga as salas de controle central automatizadas e sistemas de suporte à vida.");

// Heliponto Suspenso
const helipadGroup = new THREE.Group();
const helipadPlate = new THREE.Mesh(new THREE.CylinderGeometry(10, 10, 1, 32), matHelipad);
helipadPlate.position.set(-16, 51, 23);
helipadGroup.add(helipadPlate);
const hTruss1 = new THREE.Mesh(new THREE.CylinderGeometry(0.5, 0.5, 16), matSteel);
hTruss1.position.set(-16, 43, 22);
hTruss1.rotation.x = Math.PI / 4;
helipadGroup.add(hTruss1);
platformGroup.add(helipadGroup);
registerInteractable(helipadPlate, "Heliponto Homologado", "Plataforma de pouso suspensa dimensionada para helicópteros de grande porte (como os Sikorsky S-92), crucial para a logística de troca de turmas.");

// Vasos Separadores de Processo Químico
const processPlant = new THREE.Group();
const positionsTanks = [[14, -12], [14, -2], [6, -12], [6, -2]];
positionsTanks.forEach((p) => {
    const tank = new THREE.Mesh(new THREE.CylinderGeometry(3.2, 3.2, 12, 16), matWhiteModule);
    tank.position.set(p[0], 43, p[1]);
    processPlant.add(tank);
    const pipeLoop = new THREE.Mesh(new THREE.TorusGeometry(2, 0.3, 8, 12, Math.PI), matOrangeSafety);
    pipeLoop.position.set(p[0], 49, p[1]);
    processPlant.add(pipeLoop);
});
platformGroup.add(processPlant);
registerInteractable(processPlant.children[0], "Planta de Tratamento e Processo", "Vasos depuradores e separadores de fluidos. Realizam a separação primária de óleo, água, sedimentos e gases nocivos extraídos do poço.");

// Tubulações Industriais de Alta Pressão
const pipingNetwork = new THREE.Group();
const pipeLines = [
    { r: 0.6, h: 48, pos: [12, 39, 10], rot: [0, 0, Math.PI/2], m: matOrangeSafety },
    { r: 0.4, h: 30, pos: [10, 40, 12], rot: [Math.PI/2, 0, 0], m: matSteel }
];
pipeLines.forEach((line) => {
    const pMesh = new THREE.Mesh(new THREE.CylinderGeometry(line.r, line.r, line.h, 8), line.m);
    pMesh.position.set(line.pos[0], line.pos[1], line.pos[2]);
    pMesh.rotation.set(line.rot[0], line.rot[1], line.rot[2]);
    pipingNetwork.add(pMesh);
});
platformGroup.add(pipingNetwork);
registerInteractable(pipingNetwork.children[0], "Manifolds e Linhas de Coleta", "Rede de tubulações de alta pressão que conectam os risers submarinos de produção aos vasos de processamento químico no convés.");

// Torre de Flare Angulada (Queimador de Gás Aliviado)
const flareBoom = new THREE.Group();
const segments = 8;
const segLength = 4.5;
for(let i = 0; i < segments; i++) {
    const matSel = (i % 2 === 0) ? matSignalRed : matWhiteModule;
    const subLattice = buildLatticeStructure(3.5 - (i*0.3), 3.5 - ((i+1)*0.3), segLength, 1, matSel);
    subLattice.position.y = i * segLength;
    flareBoom.add(subLattice);
}
flareBoom.position.set(22, 38, -22);
flareBoom.rotation.set(-Math.PI/3, 0, Math.PI/3);
platformGroup.add(flareBoom);

// Três Guindastes de Lança Pesada
function addIndustrialCrane(x, z, rotY) {
    const crane = new THREE.Group();
    crane.position.set(x, 38, z);
    crane.rotation.y = rotY;
    const base = new THREE.Mesh(new THREE.CylinderGeometry(1.8, 1.8, 5, 12), matDarkSteel);
    crane.add(base);
    const cabin = new THREE.Mesh(new THREE.BoxGeometry(2.5, 2.5, 3.5), matYellowSub);
    cabin.position.y = 3.5;
    crane.add(cabin);
    const arm = buildLatticeStructure(1.2, 0.4, 26, 4, matYellowSub);
    arm.position.set(0, 4, 0);
    arm.rotation.x = Math.PI / 3;
    crane.add(arm);
    platformGroup.add(crane);
}
addIndustrialCrane(22, 18, Math.PI / 4);
addIndustrialCrane(22, -18, -Math.PI / 3);
addIndustrialCrane(-22, -18, Math.PI / 1.2);

scene.add(platformGroup);

// === MECANISMO DE INTERAÇÃO COM ELEMENTOS ===
const raycaster = new THREE.Raycaster();
const mouse = new THREE.Vector2();
const popup = document.getElementById('info-popup');
const popupTitle = document.getElementById('popup-title');
const popupDesc = document.getElementById('popup-desc');
const closeBtn = document.getElementById('close-popup');

closeBtn.addEventListener('click', () => popup.classList.add('hidden'));

window.addEventListener('click', (event) => {
    const rect = renderer.domElement.getBoundingClientRect();
    mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
    mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;

    raycaster.setFromCamera(mouse, camera);
    const intersects = raycaster.intersectObjects(interactables);

    if (intersects.length > 0) {
        const target = intersects[0].object;
        popupTitle.textContent = target.userData.title;
        popupDesc.textContent = target.userData.description;
        popup.classList.remove('hidden');
    }
});

window.addEventListener('resize', () => {
    const w = container.clientWidth;
    const h = container.clientHeight;
    renderer.setSize(w, h);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
});

// === LOOP DE ANIMAÇÃO DA SIMULAÇÃO (FÍSICA CORRIGIDA) ===
const clock = new THREE.Clock();

function animate() {
    requestAnimationFrame(animate);
    const elapsedTime = clock.getElapsedTime();

    // 1. Deformação Contínua da Malha de Água (Combinando Senos e Cossenos)
    const positions = water.geometry.attributes.position;
    for (let i = 0; i < positions.count; i++) {
        const data = waveData[i];
        const currentY = Math.sin(data.phase + elapsedTime * data.speed * 55) * data.amp
            + Math.cos(data.x * 0.04 + elapsedTime * 1.4) * 0.35
            + Math.sin(data.z * 0.04 + elapsedTime * 1.1) * 0.25;
        positions.setZ(i, currentY);
    }
    positions.needsUpdate = true;

    // CORREÇÃO CRÍTICA: Força o Three.js a recalcular os reflexos e brilhos do sol nas cristas móveis das ondas
    water.geometry.computeVertexNormals();

    // 2. Balanço Hidrodinâmico Suave da Plataforma Flutuando sob o efeito do mar
    platformGroup.position.y = Math.sin(elapsedTime * 0.5) * 0.3;
    platformGroup.rotation.z = Math.cos(elapsedTime * 0.4) * 0.002;
    platformGroup.rotation.x = Math.sin(elapsedTime * 0.3) * 0.0015;

    controls.update();
    renderer.render(scene, camera);
}

animate();