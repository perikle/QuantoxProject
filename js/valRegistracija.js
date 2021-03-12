function proveriLozinki(lozinka1, lozinka2)
{
  if (!(lozinka1 === lozinka2))
  {
    alert('Lozinkite ne se isti');
    return false;
  }
  if (lozinka1 === '')
  {
    alert('Nemate vneseno lozinka!');
    return false;
  }
  return true;
}

   function proveriEmail(email)
{
  var test=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
  var rezultat = email.match(test);
  if (rezultat !== null){
    return true;
  }
  else{
   alert("Morate da vnesete validna E-mail adresa!");
   return false;
 }
}
function proveriIme(ime)
{
  if (ime === null || ime === '' || isNaN(ime) === false)
  {
    alert('Morate da vnesete ime ili vasiot podatok ne e ime!');
    return false;
  }
  return true;
}
function proveriSifra(sifra)
{
  if (sifra === null || sifra === '' || isNaN(sifra) === false)
  {
    alert('Morate uneti ime ili vas podatak nije ime!');
    return false;
  }
  return true;
}