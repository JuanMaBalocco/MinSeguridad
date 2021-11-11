if(document.getElementById('paises')){
  fetch('./data/paises.json').then(res=>res.json()).then(data=>{
    data.map(p=>{
      document.getElementById('paises').innerHTML+=`<option value=${p.iso3}>${p.nombre}</option>`;
      }); 
  });

} 