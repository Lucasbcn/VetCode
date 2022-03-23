<html>
<?php
    require_once("Components/layout.php");
?>
<body>

    <nav class=" top-0 h-18 bg-indigo-300 flex padding p-2">
        <img class="justify-self-start"src="./IMGSRC/Veterinarian.svg" alt="patas">
        <h1 class="flex self-center ml-11 text-3xl">Edit</h1>
    </nav>

    <main class="bg-white p-7 pt-2 pb-1 flex flex-col items-center h-42">
        <section class="box-border flex justify-center flex-col border-solid rounded-2xl h-1/2 w-80 bg-green-200">
            <form action='?action=update&id=<?php echo $data["pet"]->getId() ?>' method="post">
                <p class="ml-7 mt-2">Pet Name:</p>
                <div class="box-border h-10 w-64 p-2 m-2 ml-7 border-solid flex justify-center rounded-2xl bg-white">
                    <input class="box-border h-6 w-56 p-1" type="text" id="name" name="pet_name" required value ='<?php echo $data["pet"]->getPetName() ?>'>
                </div>
                <p class="ml-7 mt-2">Specie:</p>
                <div class="box-border h-10 w-64 p-2 m-2 mt-3 ml-7 border-solid flex justify-center rounded-2xl bg-white">
                    <input class="box-border h-6 w-56 p-1" type="text" id="species" name="species" required value ='<?php echo $data["pet"]->getSpecies() ?>'>
                </div>
                <p class="ml-7 mt-2">Dr. :</p>
                <div class="box-border h-10 w-64 pl-4 p-2 m-2 mt-3 ml-7 border-solid rounded-2xl bg-white">
                    <select class="box-border h-6 w-56 p-1 bg-white" id="doctor" name="doctor" required value ='<?php echo $data["pet"]->getDoctor() ?>'>
                        <option value="aparicio">Aparicio</option>
                        <option value="abidoral">Abidoral</option>
                        <option value="calvo">Calvo</option>
                        <option value="rosa">Rosa</option>
                        <option value="vidal">Vidal</option>
                    </select>
                </div>
                <p class="ml-7 mt-2">Date:</p>
                <div class="box-border h-10 w-64 pl-4 p-2 m-2 mt-3 ml-7 border-solid rounded-2xl bg-white">
                    <input class="box-border h-6 w-56 p-1 bg-white" type="date" id="date" name="date" required value ='<?php echo $data["pet"]->getDate() ?>'>
                </div>
                <p class="ml-7 mt-2">Observations:</p>
                <div class="box-border max-h-screen w-64 pl-4 p-2 m-2 mt-3 ml-7 mb-7 border-solid rounded-2xl bg-white">
                    <textarea id="story" name="observations" rows="4" cols="17" required value ='<?php echo $data["pet"]->getObservations() ?>'></textarea>
                </div>
                <section class="box-border flex m-2 h-32 max-w-screen p-2">
                    <input type="submit" value="edit">
                    <input type="submit" value="reset">
                </section> 

            </form>
        </section>
    </main>
    
    <?php
    require_once("Components/footer.php");
    ?>

</body>


</html>