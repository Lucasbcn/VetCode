const requestURL = "../JSON/agenda.json";

async function fetchAnimalsJSON(){
    const response = await fetch(requestURL);
    const agenda = await response.json();
    return agenda;
};

fetchAnimalsJSON().then(agenda => {
    for (let index = 0; index < agenda.animals.length; index++) {
        let pet_name = agenda.animals[index].pet_name;
        let doctor = agenda.animals[index].doctor;
        let date = agenda.animals[index].date;
        cards.innerHTML += `
        <section>
            <div>
                <p>${pet_name}</p>
                <p>${doctor}</p>
                <p>${date}</p>
            </div>
        </section>
        `
        }
})