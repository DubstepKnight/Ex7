function showLanguage()
{
    var language = document.getElementById("language").value;
    console.log("language: " + language);
    document.getElementById("selectedLang").value = language;
}

function showPhone(phone)
{
    document.getElementById("selectedPhone").value = phone;
}