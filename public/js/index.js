
const ruleta = document.getElementById("ruleta");
let ganador = "";
const root = document.documentElement;
let sorteando = false;

document.getElementById("btnGirar").addEventListener("click",()=>sortear());

const colores=[
	"3b65b2","facb00","c4a100","1b285f","facb00","c4a100","3b65b2","c4a100","facb00","c4a100"
];

const elemental1 = {
	nombre: "Pokémon elemental",
	probabilidad:10
}
const normal = {
	nombre: "Pokémon normal",
	probabilidad: 10
}
const objeto1 = {
	nombre: "objeto",
	probabilidad: 10
}
const especial = {
	nombre: "Pokémon especial",
	probabilidad: 10
}
const normal2 = {
	nombre: "Pokémon normal",
	probabilidad: 10
}
const objeto2 = {
	nombre: "objeto",
	probabilidad: 10
}
const elemental2 = {
	nombre: "Pokémon elemental",
	probabilidad: 10
}
const objeto3 = {
	nombre: "objeto",
	probabilidad: 10
}
const normal3 = {
	nombre: "Pokémon normal",
	probabilidad: 10
}
const objeto4 = {
	nombre: "objeto",
	probabilidad: 10
}

let conceptos = [elemental1,normal,objeto1,especial,normal2, objeto2, elemental2, objeto3, normal3, objeto4];


function ajustarRuleta(){
	const opcionesContainer = document.createElement("div");
	opcionesContainer.id = "opcionesContainer"
	ruleta.appendChild(opcionesContainer);
	let pAcumulada = 0;
	conceptos.forEach((concepto, i)=>{
		const opcionElement = document.createElement("div");
		opcionElement.classList.add("opcion");
		opcionesContainer.appendChild(opcionElement);
		opcionElement.style = `background-color: #${colores[i]};
		transform:rotate( ${probabilidadAGrados(pAcumulada)}deg);
		${getPosicionParaProbabilidad(concepto.probabilidad)}
		`
		pAcumulada += concepto.probabilidad;
	})
}





function getPosicionParaProbabilidad(probabilidad){
	if(probabilidad === 100){
		return ''
	}
	if(probabilidad >= 87.5){
		const x5 = Math.tan(probabilidadARadianes(probabilidad))*50+50;
		return `clip-path: polygon(50% 0%, 100% 0, 100% 100%, 0 100%, 0 0, ${x5}% 0, 50% 50%)`
	}
	if(probabilidad >= 75){
		const y5 = 100 - (Math.tan(probabilidadARadianes(probabilidad-75))*50+50);
		return `clip-path: polygon(50% 0%, 100% 0, 100% 100%, 0 100%, 0% ${y5}%, 50% 50%)`
	}
	if(probabilidad >= 62.5){
		const y5 = 100 - (0.5 - (0.5/ Math.tan(probabilidadARadianes(probabilidad))))*100;
		return `clip-path: polygon(50% 0%, 100% 0, 100% 100%, 0 100%, 0% ${y5}%, 50% 50%)`
	}
	if(probabilidad >= 50){
		const x4 = 100 - (Math.tan(probabilidadARadianes(probabilidad))*50+50);
		return `clip-path: polygon(50% 0, 100% 0, 100% 100%, ${x4}% 100%, 50% 50%)`
	}
	if(probabilidad >= 37.5){
		const x4 = 100 - (Math.tan(probabilidadARadianes(probabilidad))*50+50);
		return `clip-path: polygon(50% 0, 100% 0, 100% 100%, ${x4}% 100%, 50% 50%)`
	}
	if(probabilidad >= 25){
		const y3 = Math.tan(probabilidadARadianes(probabilidad-25))*50+50;
		return `clip-path: polygon(50% 0, 100% 0, 100% ${y3}%, 50% 50%)`
	}
	if(probabilidad >= 12.5){
		const y3 = (0.5 - (0.5/ Math.tan(probabilidadARadianes(probabilidad))))*100;
		return `clip-path: polygon(50% 0, 100% 0, 100% ${y3}%, 50% 50%)`
	}
	if(probabilidad >= 0){
		const x2 = Math.tan(probabilidadARadianes(probabilidad))*50 + 50;
		return `clip-path: polygon(50% 0, ${x2}% 0, 50% 50%)`
	}
}

function sortear(){
	if (sorteando) return;
	sorteando = true;
	const nSorteo = Math.random();
	let pAcumulada = 0;
	ruleta.classList.toggle("girar",true);
	conceptos.forEach(concepto =>{
		if(nSorteo*100 >= pAcumulada && nSorteo<pAcumulada+concepto.probabilidad){
			ganador = concepto.nombre;
			console.log("Ganador", nSorteo*100, concepto.nombre, "porque está entre ",pAcumulada, "y",pAcumulada+concepto.probabilidad)
		}
		pAcumulada += concepto.probabilidad;
	})
	const giroRuleta = 10*360+ (1-nSorteo*360);
	root.style.setProperty("--giroRuleta",giroRuleta+"deg");
}

ruleta.addEventListener("animationend",()=>{
	ruleta.style.transform= "rotate("+getCurrentRotation(ruleta)+"deg)";
	sorteando = false;
	ruleta.classList.toggle("girar",false);
})

ajustarRuleta();
