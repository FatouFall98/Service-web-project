import { TestBed } from '@angular/core/testing';

import { MesservicesService } from './messervices.service';

describe('MesservicesService', () => {
  let service: MesservicesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(MesservicesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
