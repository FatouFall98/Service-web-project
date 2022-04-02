import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Bureaudevotes } from '../model/bureaudevotes.model';

@Injectable({
  providedIn: 'root'
})
export class BureaudevotesService {

  private url= 'http://127.0.0.1:8000/api';

  httpOption={
    headers:new HttpHeaders({
      'Content-Type':'Application/json',
    }),
  };

  constructor(private http:HttpClient) { 
  }

  Choisirbureau(){
    return this.http.get<Bureaudevotes[]>(this.url +'/bureaudevotes');
  }
}
