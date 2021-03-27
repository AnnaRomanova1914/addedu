// программы
const progsList = $('li.checkbox-box'),
    progsListInput = progsList.find('input.checkbox-prog'),
    progCount = progsListInput.length,
    countLabel = $('#count-prog'),
    selectAll = $('#checkbox-all');


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
$('#searchForm').keyup(function() {
    let searchText = $(this).val();

    if (searchText.length > 1) {
        progsList.hide();
        selectAll.show();
        progsList.filter(':contains("' + searchText + '")').show();
    } else {
        progsList.show();
    }
});


// выбрать все, если нажата галочка Выбрать все или убрать все, если галочка снята
selectAll.click(function(event) {
    progsList.filter(':visible').find('input.checkbox-prog').prop("checked", event.target.checked);
    countProg();
});

// убрать галочку Выбрать все, если в каком-то элементе убрали галочку
progsListInput.click(function(event) {
    if (event.target.checked == false)
        selectAll.prop("checked", false);
    countProg();
});