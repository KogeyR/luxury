<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230928073113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat_experience DROP FOREIGN KEY FK_9DB2AEAA46E90E27');
        $this->addSql('ALTER TABLE candidat_experience DROP FOREIGN KEY FK_9DB2AEAA8D0EB82');
        $this->addSql('DROP TABLE candidat_experience');
        $this->addSql('ALTER TABLE experience ADD candidat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C1038D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('CREATE INDEX IDX_590C1038D0EB82 ON experience (candidat_id)');
        $this->addSql('ALTER TABLE offer RENAME INDEX idx_29d6873e1a65c546 TO IDX_29D6873E3E030ACD');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidat_experience (candidat_id INT NOT NULL, experience_id INT NOT NULL, INDEX IDX_9DB2AEAA46E90E27 (experience_id), INDEX IDX_9DB2AEAA8D0EB82 (candidat_id), PRIMARY KEY(candidat_id, experience_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE candidat_experience ADD CONSTRAINT FK_9DB2AEAA46E90E27 FOREIGN KEY (experience_id) REFERENCES experience (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidat_experience ADD CONSTRAINT FK_9DB2AEAA8D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C1038D0EB82');
        $this->addSql('DROP INDEX IDX_590C1038D0EB82 ON experience');
        $this->addSql('ALTER TABLE experience DROP candidat_id');
        $this->addSql('ALTER TABLE offer RENAME INDEX idx_29d6873e3e030acd TO IDX_29D6873E1A65C546');
    }
}
