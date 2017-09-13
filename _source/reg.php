<?
    include_once("connect.php");
    if (isset($_POST['submit']))
    {
    if(empty($_POST['Email']))
    {
    echo 'Вы не ввели Email';
    }
    elseif(empty($_POST['Surname']))
    {
    echo 'Вы не ввели';
    }
    elseif(empty($_POST['Name']))
    {
    echo 'Вы не указали свое отчество';
    }
    elseif(empty($_POST['MiddleName']))
    {
    echo 'Вы не указали свое отчество';
    }
    elseif(empty($_POST['Birthday']))
    {
    echo 'Вы не указали дату своего рождения';
    }
    elseif(empty($_POST['Sex']))
    {
    echo 'Вы не указали';
    }
    elseif(empty($_POST['ContactPhone']))
    {
    echo 'Вы не указали';
    }
    elseif(empty($_POST['HomePhone']))
    {
    echo 'Вы не указали';
    }
    elseif(empty($_POST['Region']))
    {
    echo 'Вы не указали';
    }
    elseif(empty($_POST['TypeOfSettlement']))
    {
    echo 'Вы не указали';
    }
    elseif(empty($_POST['TheVillage']))
    {
    echo 'Вы не указали';
    }
   elseif(empty($_POST['Email']))
    {
    echo 'Вы не указали свою электронную почту';
    }
    else
    {
    $Surname = $_POST['Surname'];
    $Name = $_POST['Name'];
    $Middleame = $_POST['MiddleNamename'];
    $Birthday = $_POST['Birthday'];
    $Sex = $_POST['Sex'];
    $ContactPhone = $_POST['ContactPhone'];
    $HomePhone = $_POST['HomePhone'];
    $Privileges1= $_POST['Privileges1'];
    $Privileges2 = $_POST['Privileges2'];
    $Nationality = $_POST['Nationality'];
    $Region = $_POST['Region'];
    $Email = $_POST['Email'];
    $TypeofSettlement = $_POST['TypeofSettlement'];
    $TheVillage = $_POST['TheVillage'];
    $Class = $_POST['Class'];
    $School = $_POST['School'];
    $RegionOfSchool = $_POST['RegionOfSchool'];
    $CityOFSchool = $_POST['CityOfSchool'];
    $Subject = $_POST['Subject'];
    $DateOfRegistration = date("d.m.Y");
//$sql = mysql_query($query) or die(mysql_error());
    $query = "INSERT INTO Profile(Surname, Name, MiddleName, Birthday, Sex, ContactPhone, HomePhone, Privileges1, Privileges2,Nationality, Region, Email, TypeofSettlement, TheVillage, Class, School, RegionOfSchool, CityOFSchool, Subject, DateOfRegistration) VALUES ('$Surname', '$Name', '$Middlename', '$Birthday', '$Sex', '$ContactPhone', '$HomePhone', '$Privileges1', '$Privileges2', '$Nationality', '$Region', '$Email', '$TypeofSettlement', '$TheVillage', '$Class', '$School', '$RegionOfSchool', '$CityOFSchool', '$Subject', '$DateOfRegistration')";
mysql_query($query) or die(mysql_error());
//$result = mysql_query($query) or die(mysql_error());;
    echo 'Завершено';
          }
    }
    ?>
