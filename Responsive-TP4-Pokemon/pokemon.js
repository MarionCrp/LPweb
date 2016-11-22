var pokemons = new Array();

function Pokemon(id, name, type, picture, href, description){
  this.id = id;
  this.href = href;
  this.name = name;
  this.type = type;
  this.picture = picture;
  this.description = description;
}

function display_pokemon(pokemons){
  // TODO
  for(pokemon in pokemons[0]){
    debugger;
  }
}



window.onload=function(){
  var req = new XMLHttpRequest();
  req.open("GET", "pokemons.json", true);
  req.onreadystatechange = (function(){
    if(req.readyState == 4 && (req.status == 200 || req.status == 0)){
      var Data = JSON.parse(req.responseText);
      for(pokemon in Data["pokemons"]){
        attributes = Data["pokemons"][pokemon];
        pokemons.push(new Pokemon(attributes.id, attributes.name, attributes.type, attributes.picture, attributes.href, attributes.description));
      }
    } else {
      //alert("Not ready yet");
    }
  });
  req.send(null);
  // TODO: J'ai ma liste de Pokemon dans "pokemons"! A traiter, ici !
  display_pokemon(pokemons);
}
