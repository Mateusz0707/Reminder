
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('./graphic_register_login.jpg');"></div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <div class="flex items-center justify-between mt-4">
            </div>
            <?php
// Sprawdzenie, czy otrzymano żądanie POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Połączenie z bazą danych
    $servername = "mysql"; // Nazwa serwera bazy danych
    $username = "root"; // Nazwa użytkownika bazy danych
    $password = "your_root_password"; // Hasło do bazy danych
    $dbname = "reminder"; // Nazwa bazy danych

    // Utworzenie połączenia
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie, czy połączenie zostało nawiązane
    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    // Pobranie danych z formularza
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Przygotowanie zapytania SQL
    $sql = "INSERT INTO uzytkownik (Nazwa_uzytkownika, haslo, email) VALUES ('$name', '$password', '$email')";

    // Wykonanie zapytania SQL
    if ($conn->query($sql) === TRUE) {
        echo "Rejestracja udana";
    } else {
        echo "Błąd podczas rejestracji: " . $conn->error;
    }

    // Zamknięcie połączenia z bazą danych
    $conn->close();
}
?>

<form method="post" action="register.php">
    <div class="mt-4">
        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="LoggingName">Imię i nazwisko</label>
        <input id="LoggingName" name="name" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="text" />
    </div>

    <div class="mt-4">
        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="LoggingEmailAddress">Adres Email</label>
        <input id="LoggingEmailAddress" name="email" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="email" />
    </div>

    <div class="mt-4">
        <div class="flex justify-between">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="loggingPassword">Hasło</label>
            <a href="#" class="text-xs text-gray-500 dark:text-gray-300 hover:underline">Zapomniałeś hasła?</a>
        </div>

        <input id="loggingPassword" name="password" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" type="password" />
    </div>

    <div class="mt-6">
        <button type="submit" class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
            Zarejestruj się
        </button>
    </div>
</form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

            <a href="#" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">Masz już konto? Zaloguj się</a>

            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
    </div>
</div>
    
</body>
</html>