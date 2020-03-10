<div class="modal fade bd-example-modal-lg" id="editArticle<?= $single_article['ida'] ?>" tabindex="-1" role="dialog"
     aria-labelledby="editArticle<?= $single_article['ida'] ?>Title"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editArticle<?= $single_article['ida'] ?>Title">Редактировать описание
                    компании</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="handlers/article-handler.php">
                    <div class="form-group">
                        <label for="article_name">Изменить запись</label>
                        <input type="text" name="article_name" class="form-control" id="article_name"
                               value="<?= $single_article['article_name']; ?>">
                        <input type="text" name="companie_id" hidden value="<?= $single_article['ida'] ?>">
                    </div>
                    <div class="form-group">
                        <label>
                            <textarea class="form-control"><?= $single_article['content']; ?></textarea>
                        </label>
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