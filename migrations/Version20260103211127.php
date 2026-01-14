<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260103211127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lecon (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, video_url VARCHAR(255) NOT NULL, position INT NOT NULL, est_gratuite TINYINT NOT NULL, cours_id INT NOT NULL, INDEX IDX_94E6242E7ECF78B0 (cours_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE lecon ADD CONSTRAINT FK_94E6242E7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours CHANGE formateur formateur VARCHAR(150) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lecon DROP FOREIGN KEY FK_94E6242E7ECF78B0');
        $this->addSql('DROP TABLE lecon');
        $this->addSql('ALTER TABLE cours CHANGE formateur formateur VARCHAR(150) DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
    }
}
