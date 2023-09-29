<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929102048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offer ADD type_id_id INT DEFAULT NULL, ADD category_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E714819A0 FOREIGN KEY (type_id_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E9777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_29D6873E714819A0 ON offer (type_id_id)');
        $this->addSql('CREATE INDEX IDX_29D6873E9777D11E ON offer (category_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E714819A0');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E9777D11E');
        $this->addSql('DROP INDEX IDX_29D6873E714819A0 ON offer');
        $this->addSql('DROP INDEX IDX_29D6873E9777D11E ON offer');
        $this->addSql('ALTER TABLE offer DROP type_id_id, DROP category_id_id');
    }
}
