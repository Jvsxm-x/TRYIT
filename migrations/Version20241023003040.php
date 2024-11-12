<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241023003040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnements (id INT AUTO_INCREMENT NOT NULL, adherant_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, INDEX IDX_4788B767BE612E45 (adherant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adherants (id INT NOT NULL, coach_id INT DEFAULT NULL, joined_at DATETIME NOT NULL, INDEX IDX_D94EEAF43C105691 (coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE administrators (id INT NOT NULL, super_admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coachs (id INT NOT NULL, specialty VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messageries (id INT AUTO_INCREMENT NOT NULL, sender_id INT DEFAULT NULL, receiver_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, sent_at DATETIME NOT NULL, INDEX IDX_12AC6BD6F624B39D (sender_id), INDEX IDX_12AC6BD6CD53EDB6 (receiver_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, users_type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnements ADD CONSTRAINT FK_4788B767BE612E45 FOREIGN KEY (adherant_id) REFERENCES adherants (id)');
        $this->addSql('ALTER TABLE adherants ADD CONSTRAINT FK_D94EEAF43C105691 FOREIGN KEY (coach_id) REFERENCES coachs (id)');
        $this->addSql('ALTER TABLE adherants ADD CONSTRAINT FK_D94EEAF4BF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE administrators ADD CONSTRAINT FK_73A716FBF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coachs ADD CONSTRAINT FK_89E318FDBF396750 FOREIGN KEY (id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE messageries ADD CONSTRAINT FK_12AC6BD6F624B39D FOREIGN KEY (sender_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE messageries ADD CONSTRAINT FK_12AC6BD6CD53EDB6 FOREIGN KEY (receiver_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE categorie_abonnement DROP FOREIGN KEY FK_ABDBA217BCF5E72D');
        $this->addSql('ALTER TABLE categorie_abonnement DROP FOREIGN KEY FK_ABDBA217F1D74413');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBBCF5E72D');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBBE612E45');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_FE9842C8BCF5E72D');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_FE9842C8BF396750');
        $this->addSql('ALTER TABLE adherant DROP FOREIGN KEY FK_97DA58BCBF396750');
        $this->addSql('ALTER TABLE administrator DROP FOREIGN KEY FK_58DF0651BF396750');
        $this->addSql('ALTER TABLE messagerie DROP FOREIGN KEY FK_14E8F60C3C105691');
        $this->addSql('ALTER TABLE messagerie DROP FOREIGN KEY FK_14E8F60CBE612E45');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE categorie_abonnement');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE adherant');
        $this->addSql('DROP TABLE administrator');
        $this->addSql('DROP TABLE messagerie');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_naissance DATE DEFAULT NULL, cin BIGINT DEFAULT NULL, email VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, discr VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categorie_abonnement (categorie_id INT NOT NULL, abonnement_id INT NOT NULL, INDEX IDX_ABDBA217BCF5E72D (categorie_id), INDEX IDX_ABDBA217F1D74413 (abonnement_id), PRIMARY KEY(categorie_id, abonnement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, adherant_id INT DEFAULT NULL, categorie_id INT DEFAULT NULL, type VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_expiration DATE DEFAULT NULL, date_debut DATE DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, INDEX IDX_351268BBBCF5E72D (categorie_id), INDEX IDX_351268BBBE612E45 (adherant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE coach (id INT NOT NULL, categorie_id INT DEFAULT NULL, annee_experience INT DEFAULT NULL, INDEX IDX_FE9842C8BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE adherant (id INT NOT NULL, gender VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE administrator (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE messagerie (id INT AUTO_INCREMENT NOT NULL, adherant_id INT DEFAULT NULL, coach_id INT DEFAULT NULL, contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_message DATE DEFAULT NULL, INDEX IDX_14E8F60C3C105691 (coach_id), INDEX IDX_14E8F60CBE612E45 (adherant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categorie_abonnement ADD CONSTRAINT FK_ABDBA217BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_abonnement ADD CONSTRAINT FK_ABDBA217F1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBBE612E45 FOREIGN KEY (adherant_id) REFERENCES adherant (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_FE9842C8BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_FE9842C8BF396750 FOREIGN KEY (id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adherant ADD CONSTRAINT FK_97DA58BCBF396750 FOREIGN KEY (id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE administrator ADD CONSTRAINT FK_58DF0651BF396750 FOREIGN KEY (id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE messagerie ADD CONSTRAINT FK_14E8F60C3C105691 FOREIGN KEY (coach_id) REFERENCES coach (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE messagerie ADD CONSTRAINT FK_14E8F60CBE612E45 FOREIGN KEY (adherant_id) REFERENCES adherant (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE abonnements DROP FOREIGN KEY FK_4788B767BE612E45');
        $this->addSql('ALTER TABLE adherants DROP FOREIGN KEY FK_D94EEAF43C105691');
        $this->addSql('ALTER TABLE adherants DROP FOREIGN KEY FK_D94EEAF4BF396750');
        $this->addSql('ALTER TABLE administrators DROP FOREIGN KEY FK_73A716FBF396750');
        $this->addSql('ALTER TABLE coachs DROP FOREIGN KEY FK_89E318FDBF396750');
        $this->addSql('ALTER TABLE messageries DROP FOREIGN KEY FK_12AC6BD6F624B39D');
        $this->addSql('ALTER TABLE messageries DROP FOREIGN KEY FK_12AC6BD6CD53EDB6');
        $this->addSql('DROP TABLE abonnements');
        $this->addSql('DROP TABLE adherants');
        $this->addSql('DROP TABLE administrators');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE coachs');
        $this->addSql('DROP TABLE messageries');
        $this->addSql('DROP TABLE users');
    }
}
