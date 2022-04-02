import { Component, OnInit } from '@angular/core';
import { ElecteurService } from 'src/app/services/electeur.service';
import { Electeur } from 'src/app/model/electeur.model';
import { Bureaudevotes } from 'src/app/model/bureaudevotes.model';
import { BureaudevotesService } from 'src/app/services/bureaudevotes.service';

@Component({
  selector: 'app-inscrip',
  templateUrl: './inscrip.component.html',
  styleUrls: ['./inscrip.component.css']
})
export class InscripComponent implements OnInit {
   electeur=new Electeur();
   bureau:Bureaudevotes[];
  constructor(private service:ElecteurService,private bureauSrv:BureaudevotesService) {

   }

  ngOnInit(): void {
    this.bureauSrv.Choisirbureau().subscribe((data)=>{
    this.bureau=data;
    console.log("les bureaux"+JSON.stringify(this.bureau) );
    })
  }

  enregistrer(){
    console.log(JSON.stringify(this.electeur));
    this.service.AjouterElecteur(this.electeur).subscribe((data)=>{
      console.log("enregistrement effectué");
    })
  }


}
