function proveriSearch(search)
{
if (search === null || search === '' || isNaN(search) === false)
{
    alert('Morate da vnesete validen podatok za prebaruvanje!');
    return false;
}
return true;
}