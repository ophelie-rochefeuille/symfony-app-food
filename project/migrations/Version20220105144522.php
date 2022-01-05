<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220105144522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_product_product (commande_product_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_64507FD8DD464ABC (commande_product_id), INDEX IDX_64507FD84584665A (product_id), PRIMARY KEY(commande_product_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_product_product ADD CONSTRAINT FK_64507FD8DD464ABC FOREIGN KEY (commande_product_id) REFERENCES commande_product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_product_product ADD CONSTRAINT FK_64507FD84584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_product ADD commande_id_id INT NOT NULL, ADD quantity INT NOT NULL');
        $this->addSql('ALTER TABLE commande_product ADD CONSTRAINT FK_25F1760D462C4194 FOREIGN KEY (commande_id_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_25F1760D462C4194 ON commande_product (commande_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commande_product_product');
        $this->addSql('ALTER TABLE commande_product DROP FOREIGN KEY FK_25F1760D462C4194');
        $this->addSql('DROP INDEX IDX_25F1760D462C4194 ON commande_product');
        $this->addSql('ALTER TABLE commande_product DROP commande_id_id, DROP quantity');
    }
}
