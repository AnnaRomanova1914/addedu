<div class="field-group dropdown">
    <label class="field-name" for="count-prog">Название программы</label>
    <button type="button" class="btn btn-outline btn-default dropdown-toggle" id="count-prog" data-toggle="dropdown" aria-expanded="false">
        выберите программу
    </button>

    <ul class="dropdown-menu bullet dropdown-menu-left dropdown-search-box" aria-labelledby="select" role="menu">
        <li class="search-box">
            <input id="searchForm" type="text" class="form-control" placeholder="" value="" name="search" />
        </li>
        <li class="checkbox-box-all">
            <input type="checkbox" value="all" id="checkbox-all">
            <label for="checkbox-all">[Выбрать все]</label>
        </li>
<?php echo $progItemsHTML; ?>
    </ul>
</div>