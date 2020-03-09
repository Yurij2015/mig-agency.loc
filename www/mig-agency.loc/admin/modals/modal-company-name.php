<div class="modal fade" id="editTitleCompany" tabindex="-1" role="dialog" aria-labelledby="editTitleCompanyTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTitleCompanyTitle">Редактировать название компании</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="handlers/company-name-handler.php">
                    <div class="form-group">
                        <label for="companie_name">Новое название</label>
                        <input type="text" name="companie_name" class="form-control" id="companie_name"
                               value="<?= $company->companie_name ?>">
                        <input type="text" name="companie_id" hidden value="<?= $company->id ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>