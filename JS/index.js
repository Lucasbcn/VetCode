const requestURL = "../JSON/index.json";

async function fetchAnimalsJSON(){
    const response = await fetch(requestURL);
    const animals = await response.json();
    return animals;
};

/* fetchAnimalsJSON().then(animals => {
    for (let index = 0; index < movies.peliculas.length; index++) {
        let pet_name = index.animals[index].pet_name;
        let doctor = index.animals[index].doctor;
        let date = index.animals[index].date;
        EL DIV DONDE VA.innerHTML += `
        <div></div>
        `
        }
}) */