<div class="container-fluid container-in mx-auto px-0">

    <form action="index.php" method="post">
       <div class="form-group">
           <div class="field-group dropdown">
               <label class="field-name" for="count-prog">Название программы</label>
               <button type="button" class="btn btn-outline btn-default dropdown-toggle" id="count-prog"
                   data-toggle="dropdown" aria-expanded="false">
                   выберите программу
               </button>

               <ul class="dropdown-menu bullet dropdown-menu-left dropdown-search-box" aria-labelledby="select"
                   role="menu">
                   <li class="search-box">
                       <input id="searchForm" type="text" class="form-control" placeholder="" value="" name="search" />
                   </li>
                   <li class="checkbox-box-all">
                       <input type="checkbox" value="all" id="checkbox-all">
                       <label for="checkbox-all">[Выбрать все]</label>
                   </li>
                   <?php foreach ($progItems as $id => $name) { ?>
                   <li class="checkbox-box">
                       <input type="checkbox" value="<?php echo $id; ?>" id="checkbox_<?php echo $id; ?>" name="progs[]"
                           class="checkbox-prog">
                       <label for="checkbox_<?php echo $id; ?>"><?php echo $name; ?></label>
                   </li>
                   <?php } ?>
               </ul>
           </div>
           <button type="submit" class="btn btn-primary">Фильтр</button>
   </form>

    <table class="table table-sm mt-5">
        <thead>
            <tr>
            <th scope="col-1">№ программы</th>
            <th scope="col">Название программы</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (array_values($progItems) as $i => $name) { ?>
            <tr>
            <th scope="row"><?php echo $i + 1; ?></th>
            <td><?php echo $name; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>