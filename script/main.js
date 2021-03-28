// программы
const progsList = $('li.checkbox-box'),
    progInputs = progsList.find('input.checkbox-prog'),
    progLabels = progsList.find('label'),
    progCount = progInputs.length,
    countLabel = $('#count-prog'),
    selectAll = $('#checkbox-all'),
    searchInput = $('#searchInput');

// вывод в название кнопки количетсва выбранных программ
const countProg = () => {
    let checkedCount = progsList.find('input.checkbox-prog:checked').length,
        textLabel = 'Выбраны все программы';
    if (checkedCount == progCount) {
        selectAll.prop("checked", true);
    } else {
        textLabel = checkedCount + ' из ' + progCount + ' выбрано';
    }
    countLabel.text(textLabel).button("refresh");
}
countProg();

// поиск по 2м буквам
searchInput.keyup(function() {
    let searchText = $(this).val().toLowerCase();
    // всего 1 символ
    if (searchText.length <= 1) {
        progsList.show();
        return;
    }
    // 2 и более символов
    progsList.hide();
    selectAll.show();
    // регистрозависимый progsList.filter(':contains("' + searchText + '")').show();
    // регистронезависимый
    progLabels.filter((id, item) => {
        return item.innerText.toLowerCase().indexOf(searchText) >= 0;
    }).parent().show();
});


// выбрать все, если нажата галочка Выбрать все или убрать все, если галочка снята
selectAll.click(function(event) {
    progsList.filter(':visible').find('input.checkbox-prog').prop("checked", event.target.checked);
    countProg();
});

// убрать галочку Выбрать все, если в каком-то элементе убрали галочку
progInputs.click(function(event) {
    if (event.target.checked == false)
        selectAll.prop("checked", false);
    countProg();
});