<main>
<nav class="nav">
  <ul class="nav__list container">
    <?php foreach ($category as $key => $val): ?>
        <li class="nav__item">
            <a href="pages/all-lots.html"><?=$val; ?></a>
        </li>
    <?php endforeach; ?>
  </ul>
</nav>
<?php $form_invalid = isset($errors) ? 'form--invalid' : ''; ?>
<form class="form form--add-lot container <?= $form_invalid ?>" action="add.php" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
  <h2>Добавление лота</h2>
  <div class="form__container-two">
    <div class="form__item <?= isset($errors['name'])?'form__item--invalid':'' ?>"> <!-- form__item--invalid -->
      <label for="lot-name">Наименование</label>
      <input id="lot-name" type="text" name="name" placeholder="Введите наименование лота" value="<?= $lot['name']??"" ?>">
      <span class="form__error">Введите наименование лота</span>
    </div>
    <div class="form__item <?= isset($errors['category'])?'form__item--invalid':'' ?>">
      <label for="category">Категория</label>
      <select id="category" name="category" value="<?= $lot['category']??"" ?>">
        <option>Выберите категорию</option>
        <option>Доски и лыжи</option>
        <option>Крепления</option>
        <option>Ботинки</option>
        <option>Одежда</option>
        <option>Инструменты</option>
        <option>Разное</option>
      </select>
      <span class="form__error">Выберите категорию</span>
    </div>
  </div>
  <div class="form__item form__item--wide <?= isset($errors['message'])?'form__item--invalid':'' ?>">
    <label for="message">Описание</label>
    <textarea id="message" name="message" placeholder="Напишите описание лота"><?= $lot['message']??"" ?></textarea>
    <span class="form__error">Напишите описание лота</span>
  </div>
  <div class="form__item form__item--file "> <!-- form__item--uploaded -->
    <label>Изображение</label>
    <div class="preview">
      <button class="preview__remove" type="button">x</button>
      <div class="preview__img">
        <img src="img/<?=$lot['picture']; ?>" width="113" height="113" alt="Изображение лота">
      </div>
    </div>
    <div class="form__input-file">
      <input class="visually-hidden" type="file" id="photo2" name="picture" value="">
      <label for="photo2">
        <span>+ Добавить</span>
      </label>
    </div>
  </div>
  <div class="form__container-three">
    <div class="form__item form__item--small <?= isset($errors['price'])?'form__item--invalid':'' ?>">
      <label for="lot-rate">Начальная цена</label>
      <input id="lot-rate" type="number" name="price" placeholder="0" value="<?= $lot['price']??"" ?>">
      <span class="form__error">Введите начальную цену</span>
    </div>
    <div class="form__item form__item--small <?= isset($errors['lot-step'])?'form__item--invalid':'' ?>">
      <label for="lot-step">Шаг ставки</label>
      <input id="lot-step" type="number" name="lot-step" placeholder="0" value="<?= $lot['lot-step']??"" ?>">
      <span class="form__error">Введите шаг ставки</span>
    </div>
    <div class="form__item <?= isset($errors['lot-date'])?'form__item--invalid':'' ?>">
      <label for="lot-date">Дата окончания торгов</label>
      <input class="form__input-date" id="lot-date" type="date" name="lot-date" value="<?= $lot['lot-date']??"" ?>">
      <span class="form__error">Введите дату завершения торгов</span>
    </div>
  </div>
  <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
  <button type="submit" class="button">Добавить лот</button>
</form>
</main>
