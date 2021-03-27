<div class="field-group dropdown">
    <label class="field-name" for="count-prog">Название программы</label>
    <button type="button" class="btn btn-outline btn-default dropdown-toggle" id="count-prog" data-toggle="dropdown" aria-expanded="false">
        выберите программу
    </button>

    <ul class="dropdown-menu bullet dropdown-menu-left dropdown-search-box" aria-labelledby="select" role="menu">
        <li class="search-box">
            <input id="searchForm" type="text" class="form-control" placeholder="" value="" name="search" />
        </li>
        <li class="checkbox-box">
            <input type="checkbox" value="all" id="checkboxAll">
            <label for="checkboxAll">[Выбрать все]</label>
        </li>
<?php // вывод программ
foreach ($progItems as $id => $name) {
    echo '
        <li class="checkbox-box">
            <input type="checkbox" value="' .
        $id .
        '" class="checkbox-prog">
            <label for="select1">' .
        $name .
        '</label>
        </li>
        ';
} ?>
    </ul>
</div>