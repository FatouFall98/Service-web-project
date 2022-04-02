import { Component, OnInit } from '@angular/core';
import { Electeur } from 'src/app/model/electeur.model';
import { ElecteurService } from 'src/app/services/electeur.service';

@Component({
  selector: 'app-connect',
  templateUrl: './connect.component.html',
  styleUrls: ['./connect.component.css']
})
export class ConnectComponent implements OnInit {
  electeur=new Electeur();
  electeurs: [Electeur];
  

  constructor(private service:ElecteurService) { }

  ngOnInit(): void {
  }

  login(){
    console.log(JSON.stringify(this.electeur));
    this.service.Signin().subscribe((data)=>{
      console.log("enregistrement effectué");
      
    })
  }

}
