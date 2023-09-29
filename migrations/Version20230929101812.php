<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929101812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C153C674EE');
        $this->addSql('DROP INDEX IDX_64C19C153C674EE ON category');
        $this->addSql('ALTER TABLE category DROP offer_id');
        $this->addSql('ALTER TABLE type DROP FOREIGN KEY FK_8CDE572953C674EE');
        $this->addSql('DROP INDEX IDX_8CDE572953C674EE ON type');
        $this->addSql('ALTER TABLE type DROP offer_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type ADD offer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type ADD CONSTRAINT FK_8CDE572953C674EE FOREIGN KEY (offer_id) REFERENCES offer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8CDE572953C674EE ON type (offer_id)');
        $this->addSql('ALTER TABLE category ADD offer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C153C674EE FOREIGN KEY (offer_id) REFERENCES offer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_64C19C153C674EE ON category (offer_id)');
    }
}
