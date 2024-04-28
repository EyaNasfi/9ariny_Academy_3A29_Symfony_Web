<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240426231321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY club_ibfk_1');
        $this->addSql('ALTER TABLE equipements DROP FOREIGN KEY equipements_ibfk_1');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY event_ibfk_2');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY event_ibfk_1');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY paiement_ibfk_2');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY paiement_ibfk_1');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY questions_ibfk_1');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064045E5C27E9');
        $this->addSql('ALTER TABLE remise DROP FOREIGN KEY remise_ibfk_1');
        $this->addSql('ALTER TABLE remise DROP FOREIGN KEY remise_ibfk_2');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY reponse_ibfk_1');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY salle_ibfk_1');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE equipements');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE questions');
        $this->addSql('DROP TABLE quiz');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE remise');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX nomCategorie ON categorie');
        $this->addSql('DROP INDEX `primary` ON categorie');
        $this->addSql('ALTER TABLE categorie CHANGE nomCategorie nomCategorie VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (nomCategorie)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY cours_ibfk_1');
        $this->addSql('ALTER TABLE cours CHANGE Nom_Cours Nom_Cours VARCHAR(50) NOT NULL');
        $this->addSql('DROP INDEX idfor ON cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C9783D2A5 ON cours (IDfor)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT cours_ibfk_1 FOREIGN KEY (IDfor) REFERENCES formation (ID_de_Formation)');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY formation_ibfk_1');
        $this->addSql('ALTER TABLE formation CHANGE nomCategorie nomCategorie VARCHAR(50) DEFAULT NULL, CHANGE Nom_de_Formation Nom_de_Formation VARCHAR(20) NOT NULL, CHANGE Description Description VARCHAR(20) NOT NULL, CHANGE Durée Durée VARCHAR(20) NOT NULL, CHANGE Niveau Niveau VARCHAR(20) NOT NULL, CHANGE Coût Coût VARCHAR(20) NOT NULL, CHANGE note note INT DEFAULT NULL');
        $this->addSql('DROP INDEX test ON formation');
        $this->addSql('CREATE INDEX IDX_404021BF7006D47E ON formation (nomCategorie)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT formation_ibfk_1 FOREIGN KEY (nomCategorie) REFERENCES categorie (nomCategorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE club (idclub INT AUTO_INCREMENT NOT NULL, iduser INT DEFAULT NULL, nameclub VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, numtlf INT NOT NULL, INDEX iduser (iduser), PRIMARY KEY(idclub)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE equipements (idequip INT AUTO_INCREMENT NOT NULL, idsalle INT DEFAULT NULL, categorie VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idsalle (idsalle), PRIMARY KEY(idequip)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (	id INT AUTO_INCREMENT NOT NULL, idclub INT DEFAULT NULL, iduser INT DEFAULT NULL, 	name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, lieu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date DATE NOT NULL, heure TIME NOT NULL, INDEX iduser (iduser), INDEX idclub (idclub), PRIMARY KEY(	id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE paiement (idpaiement INT AUTO_INCREMENT NOT NULL, iduser INT DEFAULT NULL, IDformation INT DEFAULT NULL, montant INT NOT NULL, modepaiement VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX IDformation (IDformation), INDEX iduser (iduser), PRIMARY KEY(idpaiement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE questions (idquest INT AUTO_INCREMENT NOT NULL, idquiz INT DEFAULT NULL, op1 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, op2 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, op3 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, answer VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, question VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idquiz (idquiz), PRIMARY KEY(idquest)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE quiz (idquiz INT AUTO_INCREMENT NOT NULL, nbrquest INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(idquiz)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reclamation (idrec INT AUTO_INCREMENT NOT NULL, iduser INT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX iduser (iduser), PRIMARY KEY(idrec)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE remise (idremise INT AUTO_INCREMENT NOT NULL, idpaiement INT DEFAULT NULL, iduser INT DEFAULT NULL, pourcentage INT NOT NULL, montantapresremise INT NOT NULL, INDEX idpaiement (idpaiement), INDEX iduser (iduser), PRIMARY KEY(idremise)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (idrep INT AUTO_INCREMENT NOT NULL, idrec INT NOT NULL, contenu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX nom (idrec), PRIMARY KEY(idrep)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE salle (idsalle INT AUTO_INCREMENT NOT NULL, iduser INT DEFAULT NULL, matiere VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX iduser (iduser), PRIMARY KEY(idsalle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT club_ibfk_1 FOREIGN KEY (iduser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE equipements ADD CONSTRAINT equipements_ibfk_1 FOREIGN KEY (idsalle) REFERENCES salle (idsalle)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT event_ibfk_2 FOREIGN KEY (iduser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT event_ibfk_1 FOREIGN KEY (idclub) REFERENCES club (idclub)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT paiement_ibfk_2 FOREIGN KEY (iduser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT paiement_ibfk_1 FOREIGN KEY (IDformation) REFERENCES formation (ID_de_Formation)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT questions_ibfk_1 FOREIGN KEY (idquiz) REFERENCES quiz (idquiz)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064045E5C27E9 FOREIGN KEY (iduser) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE remise ADD CONSTRAINT remise_ibfk_1 FOREIGN KEY (idpaiement) REFERENCES paiement (idpaiement)');
        $this->addSql('ALTER TABLE remise ADD CONSTRAINT remise_ibfk_2 FOREIGN KEY (iduser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT reponse_ibfk_1 FOREIGN KEY (idrec) REFERENCES reclamation (idrec)');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT salle_ibfk_1 FOREIGN KEY (iduser) REFERENCES user (id)');
        $this->addSql('DROP INDEX `PRIMARY` ON categorie');
        $this->addSql('ALTER TABLE categorie CHANGE nomCategorie nomCategorie VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX nomCategorie ON categorie (nomCategorie)');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (idCategorie)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C9783D2A5');
        $this->addSql('ALTER TABLE cours CHANGE Nom_Cours Nom_Cours VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX idx_fdca8c9c9783d2a5 ON cours');
        $this->addSql('CREATE INDEX IDfor ON cours (IDfor)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C9783D2A5 FOREIGN KEY (IDfor) REFERENCES formation (ID_de_Formation)');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF7006D47E');
        $this->addSql('ALTER TABLE formation CHANGE Nom_de_Formation Nom_de_Formation VARCHAR(255) NOT NULL, CHANGE Description Description VARCHAR(255) NOT NULL, CHANGE Durée Durée VARCHAR(255) NOT NULL, CHANGE Niveau Niveau VARCHAR(255) NOT NULL, CHANGE Coût Coût VARCHAR(255) NOT NULL, CHANGE note note INT NOT NULL, CHANGE nomCategorie nomCategorie VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX idx_404021bf7006d47e ON formation');
        $this->addSql('CREATE INDEX test ON formation (nomCategorie)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF7006D47E FOREIGN KEY (nomCategorie) REFERENCES categorie (nomCategorie)');
    }
}
