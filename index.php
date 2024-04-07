<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przypomnienia</title>
   <link rel="stylesheet" href="style_index.css">
   <script src="index.js" defer></script>
    <!-- Dodanie Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col h-screen">

    <!-- Baner -->
    <div style="border-bottom:1px solid lightgray;" class="w-full h-13 bg-gray-100">
        <div class="flex space-x-1">
            <button class="bg-transparent text-black font-semibold ml-5 py-2 text-xl font-bold ">
                iCloud
            </button>
            <button class="bg-transparent text-blue-700 font-semibold py-2 text-xl font-bold">
                Przypomnienia
            </button>
        </div>

        <div class="fixed top-0 right-0 p-1 flex space-x-2">
            <button
                class="bg-transparent text-right hover:bg-gray-300   py-2 px-1 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
                id="openPopup" onclick="openPopup(event)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <button class="bg-transparent hover:bg-gray-300 px-2 text-right rounded focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </button>
            <button id="openPopupUser" onclick="openPopup_user(event)" class="bg-transparent hover:bg-gray-300 text-right rounded focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </button>
        </div>
    </div>
<!-- Okno popup dla konta -->
<div id="popup_user" class="popup_user-container rounded-xl">

<!-- Wyswietlanie nazwy uzytkownika i jego emaila -->

<?php

$servername = "mysql";
$username = "root";
$password = "your_root_password";
$database = "reminder";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Nazwa_uzytkownika, email FROM uzytkownik";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        ?>
        <div style="border-bottom: solid 1px rgb(221, 220, 220);" class="bg-gray-100 h-20 rounded-tl-xl rounded-tr-xl">
            <h2 class=" ml-3 pt-3 text-xl "><?php echo $row["Nazwa_uzytkownika"]; ?></h2>
            <h3 class="ml-3 text-sm text-gray-500"><?php echo $row["email"]; ?></h3>
        </div>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>

            <div class="flex mr-5 mt-1 ml-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                  </svg>
                  
                        
                  <label for="">Ustawienia iCloud</label>


            </div>
            <div class="flex mr-5 ml-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                  </svg>
                        
                  <label for="" class="text-blue-500">Zarządzaj Apple ID</label>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1     text-blue-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                  </svg>

                  
                  


            </div>
            <hr class="w-11/12 mt-3 h-2 ml-auto mr-auto "></hr>
            <div class="flex mr-5 mt-1 ml-2 mb-3  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  
                  
                        
                  <label class="text-red-500">Wyloguj się</label>


            </div>
    
      </div>

<!-- Okno popup do dowania przypomnien -->
<div id="popup" class="popup-container">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-bold">Formularz dodawania przypomnienia</h2>
      <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8l5 5 5-5"></path>
      </svg>
    </div>
    <div class="mb-4">
      <input type="text" class="border border-gray-300 rounded-2xl px-3 py-2 w-full mb-2" placeholder="Tytuł przypomnienia">
      <input type="text" class="border border-gray-300 rounded-2xl px-3 py-2 w-full mb-2" placeholder="Notatka do przypomnienia">
    </div>
    <div class="flex justify-between mb-4">
        <label for="">Przypomnij mi w dniu</label>
        <input type="checkbox" id="toggle1" class="hidden" />
        <label for="toggle1" class="flex items-center cursor-pointer">
            <div id="toggle-bg1" class="relative w-10 h-5 bg-gray-300 rounded-full shadow-inner mr-4">
                <div class="absolute left-0 w-5 h-5 bg-gray-100 rounded-full shadow-md toggle-checkbox transition-transform duration-300 ease-in-out"></div>
            </div>
 
    </div>
    <div class="flex justify-between mb-4">
        <label for="">Przypomnij mi o godzinie</label>
        <input type="checkbox" id="toggle2" class="hidden" />
        <label for="toggle2" class="flex items-center cursor-pointer">
            <div id="toggle-bg2" class="relative w-10 h-5 bg-gray-300 rounded-full shadow-inner mr-4">
                <div class="absolute left-0 w-5 h-5 bg-gray-100 rounded-full shadow-md toggle-checkbox transition-transform duration-300 ease-in-out"></div>
            </div>
 
    </div>
    <div class="flex justify-between mb-4">
        <label for="">Priorytet dla przypomnienia</label>
        <input type="checkbox" id="toggle3" class="hidden" />
        <label for="toggle3" class="flex items-center cursor-pointer">
            <div id="toggle-bg3" class="relative w-10 h-5 bg-gray-300 rounded-full shadow-inner mr-4">
                <div class="absolute left-0 w-5 h-5 bg-gray-100 rounded-full shadow-md toggle-checkbox transition-transform duration-300 ease-in-out"></div>
            </div>
 
    </div>
    <div class="flex justify-between items-center mb-4">
        <label for="">Kategoria</label>
    <form>
  <label for="category_select" class="sr-only"></label>
  <select id="category_select" class="text-center block py-1.5 px-0 w-52 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 ">
      <option class="text-center" selected>Wybierz kategorię</option>
      <option value="1">Szkoła</option>
      <option value="2">Praca</option>
      <option value="3">Hobby</option>
      <option value="4">Rodzina</option>
  </select>
</form>
    </div>
    <div class="flex justify-end justify-between">
      <button id="saveBtn" class="bg-blue-500 hover:bg-blue-700 w-56  text-white font-bold py-2 px-4 rounded-2xl mr-2">Zachowaj</button>
      <button id="cancelBtn" class="bg-red-500 hover:bg-red-700 w-56  text-white font-bold py-2 px-4 rounded-2xl">Anuluj</button>
    </div>
  </div>


    <!-- Zmiana kolejności divów dla lepszego ułożenia -->
    <div class="flex flex-row h-full">

        <!-- Sidebar -->
        <div style="border-right:1px solid lightgray; width: 12%;" class="p-4 bg-transparent h-full">
            <div class="flex justify-center">
                <!-- Tutaj umieść treść twojego sidebaru -->
            </div>
            <br />
            <a href="">
                <button class="bg-gray-100 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                <div class="circle ml-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
    </svg>
</div>
                    <span>Wszyskie przypomnienia</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-100 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                <div class="circle  ml-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
    </svg>
</div>
                    <span>Szkoła</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-100 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                <div class="circle  ml-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
    </svg>
</div>
                    <span>Praca</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-100 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                <div class="circle  ml-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
    </svg>
</div>
                    <span>Hobby</span>
                </button>
            </a>
        </div>

        <!-- Wyswietlanie przypomnien -->
        <div class="min-h-screen flex-grow">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 id="tyt" class="text-3xl bg-white font-bold mb-4">Przypomnienia</h2>
                <?php
            // Połączenie z bazą danych MySQL w kontenerze Docker
            $servername = "mysql"; // Nazwa serwera MySQL (zgodna z nazwą usługi w pliku docker-compose.yml)
            $username = "root"; // Nazwa użytkownika MySQL
            $password = "your_root_password"; // Hasło użytkownika MySQL
            $dbname = "reminder"; // Nazwa bazy danych MySQL

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Sprawdzenie połączenia
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Zapytanie SQL do pobrania danych z tabeli przypomnienia
            $sql = "SELECT * FROM przypomnienia";
            $result = $conn->query($sql);

            // Wyświetlanie danych
            if ($result->num_rows > 0) {
                // Wyświetlanie danych w divie
                while ($row = $result->fetch_assoc()) {
                    ?>
                


                    <div class="bg-white rounded p-4" style="border-bottom: solid 1px lightgray; display: flex; align-items: center;">
                <input type="checkbox" id="circle-checkbox_<?php echo $row["id"]; ?>" class="hidden" />
                <label for="circle-checkbox_<?php echo $row["id"]; ?>" class="checkbox-label" style="margin-right: 10px;"></label>
                <div style="flex-grow: 1;" class="ml-2">
                    <h3 class="font-md"><?php echo $row["nazwa_przypomnienia"]; ?></h3>
                    <div>
                        <label class="text-red-500 text-sm"><?php echo $row["data"]; ?>,</label>
                        <label class="text-red-500 text-sm"><?php echo $row["godzina"]; ?></label>
                    </div>
                </div>

                <div class="flex justify-end">
                <button type="button" class="open_info_pop bg-transparent hover:bg-gray-100 px-2 text-right rounded focus:outline-none w-10 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
            </button>
                </div>
            </div>

                    <?php
                }
            } else {
                echo "Brak danych w tabeli przypomnienia";
            }
            $conn->close();
            ?>
            </div>
        </div>

    </div>
<!-- Okno popup dla szczegolow przypomnienia -->
<div id="pop_info" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
<div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-lg font-semibold mb-4">informacje o przypomnieniu</h2>
            <div class="mb-2">
                <input type="text" placeholder="Tytuł przypomnienia" class="mt-1 p-2 border border-gray-300 rounded-xl w-full">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Notatka" class="mt-1 p-2 border border-gray-300 rounded-xl w-full">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Godzina" class="mt-1 p-2 border border-gray-300 rounded-xl w-full">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Data" class="mt-1 p-2 border border-gray-300 rounded-xl w-full">
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Kategoria" class="mt-1 p-2 border border-gray-300 rounded-xl w-full">
            </div>
            <div class="flex justify-end justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 w-40  text-white py-2 px-4 rounded-2xl mr-2">Zachowaj zmiany</button>
      <button  class="close_info_Btn bg-red-500 hover:bg-red-700 w-40  text-white  py-2 px-4 rounded-2xl">Anuluj</button>
    </div>

        </div>
    </div>


</body>
</html>
  <!-- <p class="mb-2"><strong>Kategoria:</strong> <?php echo $row["kategoria"]; ?></p> -->
                           <!-- <p class="mb-2"><strong>Notatka:</strong> <?php echo $row["notatka"]; ?></p> -->