<?php
class APP__ArticleService {
  private APP__ArticleRepository $articleRepository;

  public function __construct() {
    global $App__articleRepository;
    $this->articleRepository = $App__articleRepository;
  }

  public function getForPrintArticles(): array {
    return $this->articleRepository->getForPrintArticles();
  }

  public function getForPrintArticleById(int $id): array|null {
    return $this->articleRepository->getForPrintArticleById($id);
  }

  public function writeArticle(string $title, string $body): int {
    return $this->articleRepository->writeArticle($title, $body);
  }
  public function hitArticle(int $id){
    $this->articleRepository->hitArticle($id);
  }
  public function getForCountArticles():int{
   return $this->articleRepository->getForCountArticles();
  }
}