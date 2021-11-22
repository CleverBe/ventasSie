      </div>
      <div class="modal-footer">
          <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info"
              data-dismiss="modal">CERRAR</buttom>
              @if ($selected_id < 1)
                  <button type="button" wire:click.prevent="Store()" class="btn btn-dark close-btn text-info"
                      data-dismiss="modal">GUARDAR</buttom>
                  @else
                      <button type="button" wire:click.prevent="Update()" class="btn btn-dark close-btn text-info"
                          data-dismiss="modal">ACTUALIZAR</buttom>
              @endif


      </div>
      </div>
      </div>
      </div>
