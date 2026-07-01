const carrosNovos = [

    {
        imagem:"https://images.unsplash.com/photo-1552519507-da3b142c6e3d",
        modelo:"Corolla XEi",
        marca:"Toyota",
        motor:"2.0 Flex",
        positivos:"Confiabilidade, conforto e economia",
        valor:"R$ 167.990"
    },

    {
        imagem:"https://images.unsplash.com/photo-1492144534655-ae79c964c9d7",
        modelo:"Civic Touring",
        marca:"Honda",
        motor:"1.5 Turbo",
        positivos:"Tecnologia e desempenho",
        valor:"R$ 245.900"
    },

    {
        imagem:"https://images.unsplash.com/photo-1503376780353-7e6692767b70",
        modelo:"Compass",
        marca:"Jeep",
        motor:"1.3 Turbo",
        positivos:"SUV confortável",
        valor:"R$ 219.000"
    },

    {
        imagem:"https://images.unsplash.com/photo-1549399542-7e3f8b79c341",
        modelo:"Nivus",
        marca:"Volkswagen",
        motor:"1.0 Turbo",
        positivos:"Consumo e conectividade",
        valor:"R$ 148.000"
    },

    {
        imagem:"https://images.unsplash.com/photo-1502877338535-766e1452684a",
        modelo:"Creta",
        marca:"Hyundai",
        motor:"2.0",
        positivos:"Espaço interno",
        valor:"R$ 182.000"
    }

];

const usados=[

    {
        imagem:"https://images.unsplash.com/photo-1503736334956-4c8f8e92946d",
        ano:"2018",
        marca:"Ford",
        modelo:"Fusion",
        motor:"2.0 Turbo",
        valor:"R$ 95.000"
    },

    {
        imagem:"https://images.unsplash.com/photo-1494976388531-d1058494cdd8",
        ano:"2017",
        marca:"Chevrolet",
        modelo:"Cruze",
        motor:"1.4 Turbo",
        valor:"R$ 84.500"
    },

    {
        imagem:"https://images.unsplash.com/photo-1489824904134-891ab64532f1",
        ano:"2016",
        marca:"Toyota",
        modelo:"Corolla",
        motor:"2.0",
        valor:"R$ 89.000"
    },

    {
        imagem:"https://images.unsplash.com/photo-1511919884226-fd3cad34687c",
        ano:"2019",
        marca:"Honda",
        modelo:"HR-V",
        motor:"1.8",
        valor:"R$ 109.000"
    },

    {
        imagem:"https://images.unsplash.com/photo-1493238792000-8113da705763",
        ano:"2020",
        marca:"Volkswagen",
        modelo:"Virtus",
        motor:"1.6",
        valor:"R$ 92.900"
    }

];

const museus=[

    "Museu Brasileiro do Automóvel",
    "Museu Clássicos do Sul",
    "Museu Vintage Motors",
    "Museu Nacional dos Clássicos",
    "Museu Heritage Cars"

];

const proprietarios=[

    "Fernando Almeida",
    "Marcos Oliveira",
    "Carlos Henrique",
    "Eduardo Farias",
    "Rafael Menezes",
    "Antônio Barros"

];

const antigos=[

    "Ford Model T",
    "Chevrolet Bel Air",
    "Cadillac Eldorado",
    "Fusca 1965",
    "Ford Maverick"

];

function aleatorio(lista){

    return lista[Math.floor(Math.random()*lista.length)];

}

const colecionadores=[];

for(let i=0;i<5;i++){

    colecionadores.push({

        imagem:"https://images.unsplash.com/photo-1511919884226-fd3cad34687c",

        ano:1950+Math.floor(Math.random()*25),

        modelo:aleatorio(antigos),

        museu:aleatorio(museus),

        proprietario:aleatorio(proprietarios)

    });

}

function criarNovo(carro){

    return`

<div class="card">

<img src="${carro.imagem}">

<div class="info">

<h3>${carro.modelo}</h3>

<p><strong>Marca:</strong> ${carro.marca}</p>

<p><strong>Motor:</strong> ${carro.motor}</p>

<p><strong>Pontos positivos:</strong> ${carro.positivos}</p>

<div class="preco">${carro.valor}</div>

</div>

</div>

`;

}

function criarUsado(carro){

    return`

<div class="card">

<img src="${carro.imagem}">

<div class="info">

<h3>${carro.modelo}</h3>

<p><strong>Marca:</strong> ${carro.marca}</p>

<p><strong>Ano:</strong> ${carro.ano}</p>

<p><strong>Motor:</strong> ${carro.motor}</p>

<div class="preco">${carro.valor}</div>

</div>

</div>

`;

}

function criarColecionador(carro){

    return`

<div class="card">

<img src="${carro.imagem}">

<div class="info">

<h3>${carro.modelo}</h3>

<p><strong>Ano:</strong> ${carro.ano}</p>

<p><strong>Museu:</strong> ${carro.museu}</p>

<p><strong>Proprietário:</strong> ${carro.proprietario}</p>

</div>

</div>

`;

}

const novos=document.querySelector("#novos");

carrosNovos.forEach(c=>{

    novos.innerHTML+=criarNovo(c);

});

const usadosDiv=document.querySelector("#usados");

usados.forEach(c=>{

    usadosDiv.innerHTML+=criarUsado(c);

});

const cole=document.querySelector("#colecionadores");

colecionadores.forEach(c=>{

    cole.innerHTML+=criarColecionador(c);

});