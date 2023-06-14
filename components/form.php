<form class="form d-flex flex-column gap-3 px-4" method="POST" action="../assets/scripts/form.php">
    <input type="text" name="name" id="inputName" placeholder="Nome" required>
    <input type="email" name="email" id="inputEmail" placeholder="E-mail" required>
    <input type="tel" name="tel" id="inputTel" placeholder="Telefone" required>
    <textarea name="message" id="textareaMessage" cols="30" rows="10" placeholder="Mensagem"></textarea>
    <button type="submit" class="btn base-button mt-3">Enviar</button>
</form>