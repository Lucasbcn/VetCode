const requestURL = "../JSON/index.json";

async function fetchAnimalsJSON(){
    const response = await fetch(requestURL);
    const addCards = await response.json();
    return addCards;
};

fetchAnimalsJSON().then(addCards => {
    for (let index = 0; index < addCards.animals.length; index++) {
        let pet_name = addCards.animals[index].pet_name;
        let doctor = addCards.animals[index].doctor;
        let date = addCards.animals[index].date;
        cards.innerHTML += `
        <div>
            <p>${pet_name}</p>
            <p>${doctor}</p>
            <p>${date}</p>
        </div>
        `
        }
})