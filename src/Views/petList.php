<html>

<?php
    require_once("Components/layout.php")
?>

<body class="flex flex-col min-h-screen">
    <nav class="max-w-screen bg-indigo-300 flex justify-between padding p-2 mb-6">
        <img class="justify-self-start"src="./public/IMGSRC/Veterinarian.svg" alt="patas">
        <h1 class="self-center text-3xl">VETCODE</h1>
        <a href="?action=create">
        <button class="rounded-full bg-white mt-3">
            <img class="animate-pulse" src="./public/IMGSRC/Plus Math.svg" alt="plus">
        </button></a>
    </nav>
    <main class="bg-white flex-grow">

        <?php
            foreach ($data["pet"] as $pet) {
                echo <<<TAG
                <table class="min-w-full">
                <tbody class="grid gap-y-2">
                    <tr class="odd:bg-green-100 even:bg-cyan-100 flex justify-between p-4 m-1 rounded-lg" >
                        <td class="flex self-center">
                            <a href="?action=delete&id={$pet->getId()}" class="bg-white rounded-full p-2">
                                <img src="./public/IMGSRC/close.svg" alt="">
                            </a>
                        </td>
                        <td>
                            <div class="flex flex-row"><p class="font-semibold">Pet Name:&nbsp;</p><p>{$pet->getPetName()}</p></div>
                            <div class="flex flex-row"><p class="font-semibold">Species:&nbsp;</p><p>{$pet->getSpecies()}</p></div>
                            <div class="flex flex-row"><p class="font-semibold">Dr. :&nbsp;</p><p>{$pet->getDoctor()}</p></div>
                            <div class="flex flex-row"><p class="font-semibold">Date:&nbsp;</p><p>{$pet->getDate()}</p></div>
                        </td>
                        <td class="flex self-center">
                            <a href="?action=edit&id={$pet->getId()}" class="bg-white rounded-full p-2">
                                <img src="./public/IMGSRC/Mode edit.svg" alt="boli">
                            </a>
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