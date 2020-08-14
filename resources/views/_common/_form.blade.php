<form method="post" action="/message/add" id="form-messages">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Ім'я</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Ім'я">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Пошта">
    </div>
    <div class="form-group">
        <label for="message">Повідомлення</label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Ваш текст"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Додати">
    </div>
</form>
