import { Injectable } from '@angular/core';
import { Electeur } from '../model/electeur.model';
import{HttpClient, HttpHeaders} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ElecteurService {

  private url= 'http://127.0.0.1:8000/api';

  httpOption={
    headers:new HttpHeaders({
      'Content-Type':'Application/json',
    }),
  };
  constructor(private http:HttpClient) { }

  AjouterElecteur(param:any){
    return this.http.post<Electeur>(this.url + '/users',JSON.stringify(param),this.httpOption);
  }
  VerifyCni(cni:any){
    return this.http.get<Electeur[]>(this.url +'/cnis/'+cni);
  }

  Signin(){
    return this.http.get<Electeur[]>(this.url +'/users');
  }
  Authentication(logins:string, mdp:string){
    return this.http.post<Electeur>(this.url + '/users/'+logins + '/' +mdp, this.httpOption );
  }
}
