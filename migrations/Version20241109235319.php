<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241109235319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE administrators CHANGE super_admin super_admin TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE imc ADD imc DOUBLE PRECISION NOT NULL, ADD calories_for_weight_gain DOUBLE PRECISION NOT NULL, ADD meal_details LONGTEXT DEFAULT NULL, ADD user_id INT NOT NULL, DROP weight, DROP height');
        $this->addSql('ALTER TABLE imc ADD CONSTRAINT FK_BCAF0CB5A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_BCAF0CB5A76ED395 ON imc (user_id)');
        $this->addSql('ALTER TABLE training_session DROP FOREIGN KEY FK_D7A45DAA76ED395');
        $this->addSql('DROP INDEX IDX_D7A45DAA76ED395 ON training_session');
        $this->addSql('ALTER TABLE training_session ADD adherant_id INT DEFAULT NULL, DROP start_time, DROP end_time, DROP user_id, CHANGE date date DATETIME NOT NULL, CHANGE coach_id coach_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE training_session ADD CONSTRAINT FK_D7A45DABE612E45 FOREIGN KEY (adherant_id) REFERENCES adherants (id) ON DELETE RESTRICT');
        $this->addSql('CREATE INDEX IDX_D7A45DABE612E45 ON training_session (adherant_id)');
        $this->addSql('ALTER TABLE user_coach DROP FOREIGN KEY FK_DD9B96943C105691');
        $this->addSql('ALTER TABLE user_coach ADD CONSTRAINT FK_DD9B96943C105691 FOREIGN KEY (coach_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imc DROP FOREIGN KEY FK_BCAF0CB5A76ED395');
        $this->addSql('DROP INDEX IDX_BCAF0CB5A76ED395 ON imc');
        $this->addSql('ALTER TABLE imc ADD weight DOUBLE PRECISION NOT NULL, ADD height DOUBLE PRECISION NOT NULL, DROP imc, DROP calories_for_weight_gain, DROP meal_details, DROP user_id');
        $this->addSql('ALTER TABLE training_session DROP FOREIGN KEY FK_D7A45DABE612E45');
        $this->addSql('DROP INDEX IDX_D7A45DABE612E45 ON training_session');
        $this->addSql('ALTER TABLE training_session ADD start_time TIME NOT NULL, ADD end_time TIME NOT NULL, ADD user_id INT NOT NULL, DROP adherant_id, CHANGE date date DATE NOT NULL, CHANGE coach_id coach_id INT NOT NULL');
        $this->addSql('ALTER TABLE training_session ADD CONSTRAINT FK_D7A45DAA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_D7A45DAA76ED395 ON training_session (user_id)');
        $this->addSql('ALTER TABLE administrators CHANGE super_admin super_admin TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user_coach DROP FOREIGN KEY FK_DD9B96943C105691');
        $this->addSql('ALTER TABLE user_coach ADD CONSTRAINT FK_DD9B96943C105691 FOREIGN KEY (coach_id) REFERENCES coachs (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
