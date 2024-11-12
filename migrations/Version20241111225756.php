<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241111225756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE scheduler (id INT AUTO_INCREMENT NOT NULL, salle VARCHAR(50) NOT NULL, date DATETIME NOT NULL, start_time TIME NOT NULL, end_time TIME NOT NULL, coach_id INT NOT NULL, INDEX IDX_463CEC183C105691 (coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE scheduler ADD CONSTRAINT FK_463CEC183C105691 FOREIGN KEY (coach_id) REFERENCES coachs (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scheduler DROP FOREIGN KEY FK_463CEC183C105691');
        $this->addSql('DROP TABLE scheduler');
    }
}
