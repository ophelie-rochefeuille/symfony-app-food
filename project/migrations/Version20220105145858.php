<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220105145858 extends AbstractMigration
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
        $this->addSql('ALTER TABLE product ADD restaurant_id INT NOT NULL, ADD num_commande VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADB1E7706E ON product (restaurant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commande_product_product');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADB1E7706E');
        $this->addSql('DROP INDEX IDX_D34A04ADB1E7706E ON product');
        $this->addSql('ALTER TABLE product DROP restaurant_id, DROP num_commande');
    }
}
