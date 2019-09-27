<form action="/addstudent" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Ismini kiriting">
    <input type="text" name="email" placeholder="Elektron pochtangizni kiriting">
    <button type="submit">Kiritish</button>

</form>