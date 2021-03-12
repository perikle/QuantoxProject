function proveriEmail(email)
{
if (email === null || email === '' || isNaN(email) === false)
{
    alert('Morate da vnesete validen podatok za email adresa!');
    return false;
}
return true;
}

        function proveriLozinka(lozinka)
{
if (lozinka === null || lozinka === '' || isNaN(lozinka) === false)
{
    alert('Morate da vnesete validen podatok za lozinka!');
    return false;
}
return true;
}