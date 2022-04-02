import { TestBed } from '@angular/core/testing';

import { BureaudevotesService } from './bureaudevotes.service';

describe('BureaudevotesService', () => {
  let service: BureaudevotesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(BureaudevotesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
