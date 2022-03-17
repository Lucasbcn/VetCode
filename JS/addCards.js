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
        <tr class="flex justify-between odd:bg-green-100 even:bg-cyan-100 p-4 m-1 rounded-lg" >
            <td class="flex self-center">
                <button class="bg-white rounded-full p-2">
                    <img src="../IMGSRC/close.svg" alt="">
                </button>
            </td>
            <td>
                <p>Pet Name: ${pet_name}</p>
                <p>Dr. : ${doctor}</p>
                <p>Date: ${date}</p>
            </td>
            <td class="flex self-center">
                <button class="bg-white rounded-full p-2">
                    <img src="./IMGSRC/Mode edit.svg" alt="boli">
                </button>
            </td>
        </tr>
        `
        }
})

//json-server --watch agenda.json
//TEST TEST 