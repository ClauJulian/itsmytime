console.log("nuevo script");
document.addEventListener('DOMContentLoaded', function() {

   
let descrip_tarea= document.getElementById("descrip_tarea");
// console.log("descrip1"); 
function descripTarea(){
    // console.log("Hola");
    descrip_tarea.style.display="inline-block";    
}
    
    
/* --- SEGUNDO PROTOTIPO SUMA DIAS --- */ 

function sum(dia, total, suma){
    suma=0;
    for (var i = 0; i < dia.length; i++) {
        suma += parseFloat(dia[i].value);
        total.value=suma;
    }
}

let dia_1= document.querySelectorAll(".dia_1");
let t_dia_1= document.getElementById("t_dia_1");
let s_dia_1=0;

for (var i = 0; i < dia_1.length; i++) {
    s_dia_1 += parseFloat(dia_1[i].value);
    t_dia_1.value=s_dia_1;
}

for (dia of dia_1){
    dia.addEventListener("click", function(){
        sum(dia_1, t_dia_1, s_dia_1);
    });
}

// Dia_2
let dia_2= document.querySelectorAll(".dia_2");
let t_dia_2= document.getElementById("t_dia_2");
let s_dia_2=0;

for (var i = 0; i < dia_2.length; i++) {
    s_dia_2 += parseFloat(dia_2[i].value);
    t_dia_2.value=s_dia_2;
}

for (dia of dia_2){
    dia.addEventListener("click", function(){
        sum(dia_2, t_dia_2, s_dia_2);
    });
}

// Dia_3
let dia_3= document.querySelectorAll(".dia_3");
let t_dia_3= document.getElementById("t_dia_3");
let s_dia_3=0;

for (var i = 0; i < dia_3.length; i++) {
    s_dia_3 += parseFloat(dia_3[i].value);
    t_dia_3.value=s_dia_3;
}

for (dia of dia_3){
    dia.addEventListener("click", function(){
        sum(dia_3, t_dia_3, s_dia_3);
    });
}

// Dia_4
let dia_4= document.querySelectorAll(".dia_4");
let t_dia_4= document.getElementById("t_dia_4");
let s_dia_4=0;

for (var i = 0; i < dia_4.length; i++) {
    s_dia_4 += parseFloat(dia_4[i].value);
    t_dia_4.value=s_dia_4;
}

for (dia of dia_4){
    dia.addEventListener("click", function(){
        sum(dia_4, t_dia_4, s_dia_4);
    });
}

// Dia_5
let dia_5= document.querySelectorAll(".dia_5");
let t_dia_5= document.getElementById("t_dia_5");
let s_dia_5=0;

for (var i = 0; i < dia_5.length; i++) {
    s_dia_5 += parseFloat(dia_5[i].value);
    t_dia_5.value=s_dia_5;
}

for (dia of dia_5){
    dia.addEventListener("click", function(){
        sum(dia_5, t_dia_5, s_dia_5);
    });
}

// Dia_6
let dia_6= document.querySelectorAll(".dia_6");
let t_dia_6= document.getElementById("t_dia_6");
let s_dia_6=0;

for (var i = 0; i < dia_6.length; i++) {
    s_dia_6 += parseFloat(dia_6[i].value);
    t_dia_6.value=s_dia_6;
}

for (dia of dia_6){
    dia.addEventListener("click", function(){
        sum(dia_6, t_dia_6, s_dia_6);
    });
}

// Dia_7
let dia_7= document.querySelectorAll(".dia_7");
let t_dia_7= document.getElementById("t_dia_7");
let s_dia_7=0;

for (var i = 0; i < dia_7.length; i++) {
    s_dia_7 += parseFloat(dia_7[i].value);
    t_dia_7.value=s_dia_7;
}

for (dia of dia_7){
    dia.addEventListener("click", function(){
        sum(dia_7, t_dia_7, s_dia_7);
    });
}


let d1 = document.getElementById("t_dia_1");
let d2 = document.getElementById("t_dia_2");
let d3 = document.getElementById("t_dia_3");
let d4 = document.getElementById("t_dia_4");
let d5 = document.getElementById("t_dia_5");
let d6 = document.getElementById("t_dia_6");
let d7 = document.getElementById("t_dia_7");

// console.log(d1);
let total = parseFloat(d1.value) + parseFloat(d2.value) + parseFloat(d3.value) + parseFloat(d4.value) + parseFloat(d5.value) + parseFloat(d6.value) + parseFloat(d7.value);

/* --- SUMATORIA DE OPERATIVAS Y NO OPERATIVAS --- */ 
let nopTareas = document.querySelectorAll(".nop_tareas"); // tiene todas las tareas nop.
let nopDias = document.querySelectorAll(".nop_dias"); // tiene todas las horas de todas las tareas nop.
let q_Dias = nopDias.length/nopTareas.length; // calcula cantidad de dias.
let clases_dias=[];

for(nt of nopTareas){
    const resultante=Array.from(nopDias).filter(elemento => elemento.classList.contains(nt.value));
    // calcular el total por tarea nop;
    let t_noptarea=0;
    for(r of resultante){ 
        t_noptarea = t_noptarea + parseFloat(r.value);
    }
    // console.log(t_noptarea); DA EL RESULTADO POR TAREA NOP
}


   
for (var i=1; i < q_Dias+1; i++) {

    const xdias=Array.from(nopDias).filter(elemento => elemento.id==="nop_dia_"+i);
    console.log(xdias);
        
}


/* --- SEGUNDO PROTOTIPO SUMA TAREAS --- */ 
let tareas= document.querySelectorAll(".tareas");

for (t of tareas){
    let tarea = "."+ t.value;

    let tarea_q = document.querySelectorAll(tarea);
    let s_t=0;
        for (var i = 0; i < tarea_q.length; i++) {
            s_t += parseFloat(tarea_q[i].value);
        }
      
    porcentaje = (s_t/total).toFixed(2)*100 + "%";
    document.getElementById(t.value).style.width=porcentaje;
    document.getElementById(t.value).innerHTML=porcentaje;
}

/* --- SEGUNDO PROTOTIPO GRAFICO --- */ 

upDateGrafico=document.getElementById("actualizarGrafico");

upDateGrafico.addEventListener("click", updateGraph);
function updateGraph(){
    total = parseFloat(d1.value) + parseFloat(d2.value) + parseFloat(d3.value) + parseFloat(d4.value) + parseFloat(d5.value) + parseFloat(d6.value) + parseFloat(d7.value);

    for (t of tareas){
        let tarea = "."+ t.value;
    
        let tarea_q = document.querySelectorAll(tarea);
        let s_t=0;
            for (var i = 0; i < tarea_q.length; i++) {
                s_t += parseFloat(tarea_q[i].value);
            }
          
        porcentaje = (s_t/total).toFixed(2)*100 + "%";
        document.getElementById(t.value).style.width=porcentaje;
        document.getElementById(t.value).innerHTML=porcentaje;
        
    }
    // console.log("funciono");
}




    }, false);