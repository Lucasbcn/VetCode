//console.log('TEST');

const requestURL = "../JSON/agenda.json";

async function fetchAgendaJSON(){
    const response = await fetch(requestURL);
    const agenda = await response.json();
    return agenda;
};

fetchAgendaJSON().then(agenda => {
    console.log(agenda);
    for (let index = 0; index < agenda.animals.length; index++) {
        let pet_name = agenda.animals[index].pet_name;
        let doctor = agenda.animals[index].doctor;
        let date = agenda.animals[index].date;
        cards.innerHTML += `
        <section class="box-content h-15 w-80% p-4 border-4 from-slate-200 bg-teal-100">
            <div>
                <p>Pet Name: ${pet_name}</p>
                <p>Dr. :${doctor}</p>
                <p>Date: ${date}</p>
            </div>
        </section>
        `
        }
})