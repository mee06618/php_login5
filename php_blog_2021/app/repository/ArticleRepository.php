<?php
class APP__ArticleRepository {
  public function getForPrintArticles(): array {
    $sql = DB__secSql();
    $sql->add("SELECT *");
    $sql->add("FROM article AS A");
    $sql->add("ORDER BY A.id DESC");
    return DB__getRows($sql);
  }
  public function getForCountArticles(): int{
    $sql = DB__secSql();
    $sql->add("SELECT count(*)");
    $sql->add("FROM article");
    
    return DB__getRowIntValue($sql,0);
  }

  public function getForPrintArticleById(int $id): array|null {
    $sql = DB__secSql();
    $sql->add("SELECT *");
    $sql->add("FROM article AS A");
    $sql->add("WHERE id = ?", $id);
    return DB__getRow($sql);
  }

  public function writeArticle(string $title, string $body):int {
    $sql = DB__secSql();
    $sql->add("INSERT INTO article");
    $sql->add("SET regDate = NOW()");
    $sql->add(", updateDate = NOW()");
    $sql->add(", title = ?", $title);
    $sql->add(", `body` = ?", $body);
    $id = DB__insert($sql);

    return $id;
  }

  public function hitArticle(int $id){
    $sql = DB__secSql();
    $sql->add("UPDATE article");
    $sql->add("SET hit=hit+1");
    $sql->add("where id = ?",$id);
    DB__UPDATE($sql);
    
  }
}