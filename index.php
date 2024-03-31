<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przypomnienia</title>
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
                id="openButton" onclick="openPopup()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <button class="bg-transparent hover:bg-gray-300 px-2 text-right rounded focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </button>
            <button class="bg-transparent hover:bg-gray-300 text-right rounded focus:outline-none ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </button>
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
                <button class="bg-gray-200 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6 ml-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                    </svg>
                    <span>Wszyskie przypomnienia</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-200 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6 ml-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                    </svg>
                    <span>Szkoła</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-200 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6 ml-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                    </svg>
                    <span>Praca</span>
                </button>
            </a>
            <br />
            <a href="">
                <button class="bg-gray-200 h-9 w-64 rounded-xl flex items-center justify-left space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6 ml-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
                    </svg>
                    <span>Hobby</span>
                </button>
            </a>
        </div>

        <!-- Wyswietlanie przypomnien -->
        <div class="min-h-screen flex-grow">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl  font-semibold mb-4">Przypomnienia</h2>
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
                    <div class="bg-gray-100 rounded p-4 mb-4">
                        <h3 class="font-semibold mb-2 text-xl font-bold"><?php echo $row["nazwa_przypomnienia"]; ?></h3>
                        <p class="mb-2"><strong>Notatka:</strong> <?php echo $row["notatka"]; ?></p>
                        <p class="mb-2"><strong>Godzina:</strong> <?php echo $row["godzina"]; ?></p>
                        <p class="mb-2"><strong>Data:</strong> <?php echo $row["data"]; ?></p>
                        <p class="mb-2"><strong>Kategoria:</strong> <?php echo $row["kategoria"]; ?></p>
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

</body>
</html>
