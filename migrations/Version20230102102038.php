<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230102102038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property_porteur_projet (property_id INT NOT NULL, porteur_projet_id INT NOT NULL, INDEX IDX_15DC5BE0549213EC (property_id), INDEX IDX_15DC5BE0E045BD92 (porteur_projet_id), PRIMARY KEY(property_id, porteur_projet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE property_porteur_projet ADD CONSTRAINT FK_15DC5BE0549213EC FOREIGN KEY (property_id) REFERENCES properties (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE property_porteur_projet ADD CONSTRAINT FK_15DC5BE0E045BD92 FOREIGN KEY (porteur_projet_id) REFERENCES porteur_projet (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property_porteur_projet DROP FOREIGN KEY FK_15DC5BE0549213EC');
        $this->addSql('ALTER TABLE property_porteur_projet DROP FOREIGN KEY FK_15DC5BE0E045BD92');
        $this->addSql('DROP TABLE property_porteur_projet');
    }
}
