<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230908092728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exemplaire (id INT AUTO_INCREMENT NOT NULL, usure_id INT NOT NULL, stock_id INT NOT NULL, livres_id INT NOT NULL, INDEX IDX_5EF83C921117BEE5 (usure_id), INDEX IDX_5EF83C92DCD6110 (stock_id), INDEX IDX_5EF83C92EBF07F38 (livres_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exemplaire ADD CONSTRAINT FK_5EF83C921117BEE5 FOREIGN KEY (usure_id) REFERENCES usure (id)');
        $this->addSql('ALTER TABLE exemplaire ADD CONSTRAINT FK_5EF83C92DCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id)');
        $this->addSql('ALTER TABLE exemplaire ADD CONSTRAINT FK_5EF83C92EBF07F38 FOREIGN KEY (livres_id) REFERENCES livres (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exemplaire DROP FOREIGN KEY FK_5EF83C921117BEE5');
        $this->addSql('ALTER TABLE exemplaire DROP FOREIGN KEY FK_5EF83C92DCD6110');
        $this->addSql('ALTER TABLE exemplaire DROP FOREIGN KEY FK_5EF83C92EBF07F38');
        $this->addSql('DROP TABLE exemplaire');
    }
}
