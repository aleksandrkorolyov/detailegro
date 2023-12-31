<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230726184827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE car_part (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, describrtion VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car_part_car (car_part_id INT NOT NULL, car_id INT NOT NULL, INDEX IDX_3A2FF6121F48B030 (car_part_id), INDEX IDX_3A2FF612C3C6F69F (car_id), PRIMARY KEY(car_part_id, car_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE car_part_car ADD CONSTRAINT FK_3A2FF6121F48B030 FOREIGN KEY (car_part_id) REFERENCES car_part (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE car_part_car ADD CONSTRAINT FK_3A2FF612C3C6F69F FOREIGN KEY (car_id) REFERENCES car (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car_part_car DROP FOREIGN KEY FK_3A2FF6121F48B030');
        $this->addSql('ALTER TABLE car_part_car DROP FOREIGN KEY FK_3A2FF612C3C6F69F');
        $this->addSql('DROP TABLE car_part');
        $this->addSql('DROP TABLE car_part_car');
    }
}
