<html>

<?php
    require_once("Components/layout.php")
?>

<body class="flex flex-col min-h-screen">
    <nav class="max-w-screen bg-indigo-300 flex justify-between padding p-2 mb-6">
        <img class="justify-self-start"src="./IMGSRC/Veterinarian.svg" alt="patas">
        <h1 class="self-center text-3xl">VETCODE</h1>
        <button class="rounded-full bg-white">
            <img src="./IMGSRC/Plus Math.svg" alt="plus">
        </button>
    </nav>
    <main class="bg-white flex-grow">

        <?php
            foreach ($data["pet"] as $pet) {
                echo <<<TAG
                <table class="min-w-full">
                <tbody id="cards" class="grid gap-y-2">
                    <tr class="odd:bg-green-100 even:bg-cyan-100 flex justify-between p-4 m-1 rounded-lg" >
                        <td class="flex self-center">
                            <button class="bg-white rounded-full p-2">
                                <img src="./IMGSRC/close.svg" alt="">
                            </button>
                        </td>
                        <td>
                            <p>ID: {$pet->getId()};</p>
                            <p>Pet Name: {$pet->getPetName()};</p>
                            <p>Dr. : {$pet->getDoctor()};</p>
                            <p>Date: {$pet->getDate()};</p>
                            <p>Observations: {$pet->getObservations()};</p>
                        </td>
                        <td class="flex self-center">
                            <button class="bg-white rounded-full p-2">
                                <img src="./IMGSRC/Mode edit.svg" alt="boli">
                            </button>
                        </td>
                    </tr>
                </tbody>
                </table>
                TAG;
            }
        ?>

    </main>

    <?php
        require_once("Components/footer.php")
    ?>

</body>


</html>